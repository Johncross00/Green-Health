<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\Transaction;
use App\Models\User;
use Bavix\Wallet\Exceptions\InsufficientFunds;
use Bavix\Wallet\Models\Transaction as ModelsTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransactionsExport;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use PDF;
class WalletController extends Controller
{
    // Afficher le solde
    public function show()
    {
        $wallet = Auth::user()->wallet;
        return view('wallet.show', compact('wallet'));
    }

    // Achat de bon
    public function buyCoupon(Request $request)
    {
        $wallet = Auth::user()->wallet;
        $amount = $request->amount;

        if ($wallet->balance >= $amount) {
            $wallet->balance -= $amount;
            $wallet->save();

            Transaction::create([
                'wallet_id' => $wallet->id,
                'amount' => -$amount,
                'type' => 'achat_bon'
            ]);

            return redirect()->back()->with('success', 'Achat de bon réussi.');
        } else {
            return redirect()->back()->with('error', 'Solde insuffisant.');
        }
    }

    // Retrait d'argent
    public function withdraw(Request $request)
    {
        $wallet = Auth::user()->wallet;
        $amount = $request->amount;

        if ($wallet->balance >= $amount) {
            $wallet->balance -= $amount;
            $wallet->save();

            Transaction::create([
                'wallet_id' => $wallet->id,
                'amount' => -$amount,
                'type' => 'retrait'
            ]);

            return redirect()->back()->with('success', 'Retrait effectué avec succès.');
        } else {
            return redirect()->back()->with('error', 'Solde insuffisant.');
        }
    }

    // Transfert inter réseau
    public function transfer(Request $request)
    {
        $wallet = Auth::user()->wallet;
        $recipientWallet = Wallet::where('user_id', $request->recipient_id)->first();
        $amount = $request->amount;

        if ($wallet->balance >= $amount) {
            $wallet->balance -= $amount;
            $recipientWallet->balance += $amount;

            $wallet->save();
            $recipientWallet->save();

            Transaction::create([
                'wallet_id' => $wallet->id,
                'amount' => -$amount,
                'type' => 'transfert_sortant'
            ]);

            Transaction::create([
                'wallet_id' => $recipientWallet->id,
                'amount' => $amount,
                'type' => 'transfert_entrant'
            ]);

            return redirect()->back()->with('success', 'Transfert réussi.');
        } else {
            return redirect()->back()->with('error', 'Solde insuffisant.');
        }
    }

    // Historique des transactions
    public function history()
    {
        $transactions = Auth::user()->wallet->transactions()->latest()->get();
        return view('wallet.history', compact('transactions'));
    }





    /**
     * Débiter le solde courant (gain) et créditer le portefeuille (balance).
     *
     * @param  int  $userId
     * @param  int  $amount  Montant à transférer (en centimes, par exemple)
     * @return \Illuminate\Http\JsonResponse
     */



    public function transferGainToWallet(Request $request, $userId)
    {
        // Valider le montant
        $request->validate([
            'amount' => 'required|integer|min:1',
        ]);

        $amount = $request->input('amount');

        // Récupérer l'utilisateur
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'Utilisateur non trouvé.'], 404);
        }

        // Utiliser une transaction pour garantir l'intégrité
        DB::beginTransaction();

        try {
            // Vérifier si l'utilisateur a suffisamment de gain
            if ($user->gain < $amount) {
                return response()->json(['error' => 'Solde courant insuffisant.'], 400);
            }

            // Débiter le solde courant
            $user->gain -= $amount;

            // Créditer le portefeuille
            $user->deposit($amount, [
                'description' => 'Transfert depuis le solde courant',
                'type' => 'transfer_gain_to_wallet',
            ]);

            // Sauvegarder les changements
            $user->save();

            // Valider la transaction
            DB::commit();

            return response()->json([
                'message' => 'Transfert réussi.',
                'new_gain' => $user->gain,
                'new_balance' => $user->balanceInt
            ], 200);
        } catch (InsufficientFunds $e) {
            DB::rollBack();
            return response()->json(['error' => 'Fonds insuffisants dans le portefeuille.'], 400);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Une erreur est survenue lors du transfert.'], 500);
        }
    }



    public function transferToOtherWallet(Request $request, $senderId)
    {
        // dd($request->all());
        // Valider les données entrées
        $request->validate([
            'amount' => 'required|integer|min:1',
            'recipient_phone' => 'required|string', // Le numéro de téléphone du destinataire
        ]);
        // dd($request->all());

        $amount = $request->input('amount');
        $recipientPhone = $request->input('recipient_phone');

        // Récupérer l'utilisateur expéditeur
        $sender = User::find($senderId);
        if (!$sender) {
            return response()->json(['error' => 'Expéditeur non trouvé.'], 404);
        }

        // Vérifier si l'utilisateur essaie d'envoyer de l'argent à son propre numéro
        if ($sender->numero_reseau === $recipientPhone) {
            return response()->json(['error' => 'Vous ne pouvez pas transférer de l\'argent à votre propre numéro.'], 400);
        }

        // Récupérer l'utilisateur destinataire par son numéro de téléphone
        $recipient = User::where('numero_reseau', $recipientPhone)->first();
        if (!$recipient) {
            return response()->json(['error' => 'Destinataire non trouvé.'], 404);
        }

        // Utiliser une transaction pour garantir l'intégrité
        DB::beginTransaction();

        try {
            // Vérifier si l'expéditeur a suffisamment de fonds
            if ($sender->balanceInt < $amount) {
                return response()->json(['error' => 'Fonds insuffisants.'], 400);
            }

            // Débiter le portefeuille de l'expéditeur
            $sender->withdraw($amount, [
                'description' => 'Transfert vers le portefeuille de l\'utilisateur avec le numéro : ' . $recipientPhone,
                'type' => 'transfer_to_other_wallet',
            ]);

            // Créditer le portefeuille du destinataire
            $recipient->deposit($amount, [
                'description' => 'Transfert reçu de l\'utilisateur avec le numéro : ' . $sender->numwhats,
                'type' => 'transfer_from_other_wallet',
            ]);

            // Sauvegarder les modifications pour les deux utilisateurs
            $sender->save();
            $recipient->save();

            // Valider la transaction
            DB::commit();

            return response()->json([
                'message' => 'Transfert réussi.',
                'new_sender_balance' => $sender->balanceInt,
                // 'new_recipient_balance' => $recipient->balanceInt,
            ], 200);
        } catch (InsufficientFunds $e) {
            DB::rollBack();
            return response()->json(['error' => 'Fonds insuffisants dans le portefeuille.'], 400);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Une erreur est survenue lors du transfert.'], 500);
        }
    }


    public function transactionHistory()
    {
        $user = Auth::user();

        // Récupérer le portefeuille de l'utilisateur
        $wallet = $user->wallet;

        if (!$wallet) {
            return response()->json(['error' => 'Portefeuille non trouvé pour l\'utilisateur.'], 404);
        }

        // Récupérer les transactions liées au portefeuille
        $transactions = $wallet->transactions()
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Pagination pour limiter les résultats

        return view('wallet.partials.history-table', compact('transactions'));
    }

    public function export($format)
    {
        $transactions = ModelsTransaction::all(); // Récupérer toutes les transactions ou filtrer selon besoin

        if ($format === 'pdf') {
            $pdf = FacadePdf::loadView('wallet.partials.transactions_pdf', ['transactions' => $transactions]);
            return $pdf->download('transactions.pdf');
        }
        
        return redirect()->back()->with('error', 'Format inconnu.');
    }
}
