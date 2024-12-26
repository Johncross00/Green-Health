<?php

namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Http\Repositories\PartenaireRepository;
use App\Http\Repositories\ReferralRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class PartenaireService
{
    protected $partenaire;

    public function __construct(PartenaireRepository $partenaire)
    {
        $this->partenaire = $partenaire;
    }

    public function update(array $data)
    {
        $data['location'] = $data['location'];
        $this->partenaire->update($data['id'], $data);
        return redirect()->back()->with('success', 'Mis à jour effectué avec succès');
    }

    public function create(array $data)
    {
        $ide = $this->identifiant();

        $data['identifiant'] = $ide;
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $data['location'] = $data['localite'];

        $this->partenaire->create($data);
        return redirect()->back()->with('success', 'Votre demande en attente de validation');
    }

    public function partenaires()
    {
        return $this->partenaire->partenaires();
    }

    public function chargement(array $data)
    {
        $partenaire = $this->partenaire->getByIdentifiant($data['identifiant']);
        if ($partenaire) {
            $partenaire->balance += $data['valeur'];
            $partenaire->save();
            return redirect()->back()->with('success', 'Chargement effectué');
        } else {
            return redirect()->back()->with('error', 'Aucun compte trouvé');
        }
    }

    public function activer(array $data)
    {
        $partenaire = $this->partenaire->getById($data['partenaire']);
        if ($partenaire) {
            $partenaire->status = 'active';
            $partenaire->save();
            return redirect()->back()->with('success', 'Activation effectuée');
        }
        return redirect()->back()->with('error', 'Problème survenu pendant l\'activation');
    }

    public function deactiver(array $data)
    {
        $partenaire = $this->partenaire->getById($data['partenaire']);
        if ($partenaire) {
            $partenaire->status = 'inactive';
            $partenaire->save();
            return redirect()->back()->with('success', 'Inactivation effectuée');
        }
        return redirect()->back()->with('error', 'Problème survenu pendant l\'inactivation');
    }

    public function cash(array $data)
    {
        $user = Auth::user();

        if (floatval($user->balance) > floatval($data['sommes'])) {
            $partenaire = $this->partenaire->getByIdentifiant($data['identifiant']);

            if (isset($partenaire) && $partenaire->status == 'active') {
                if (floatval($partenaire->balance) > floatval($data['sommes'])) {
                    $partenaire->balance -= $data['sommes'];

                    $data['user_id'] = $user->id;
                    $data['partenaire_id'] = $partenaire->id;

                    $caisses = [
                        'balance' => $data['sommes'] * 0.005,
                        'nom' => $user->nom,
                        'description' => 'retrait',
                    ];
                    $this->partenaire->caisse($caisses);

                    $partenaire->commissions = $data['sommes'] * 0.005;
                    $user->balance -= $data['sommes'];
                    $user->save();
                    $partenaire->save();

                    $data['sommes'] -= $data['sommes'] * 0.01;

                    $client = $this->partenaire->createClient($data);

                    if ($client) {
                        $trans = [
                            'sommes' => $data['sommes'],
                            'partenaire_id' => $partenaire->id,
                            'client_id' => $client->id,
                            'identifiant' => $this->idtr(),
                            'frais' => 1,
                        ];
                        $this->partenaire->createTransaction($trans);

                        return redirect()->back()->with('success', 'Retrait effectué avec succès');
                    } else {
                        return redirect()->back()->with('error', 'Problème survenu pendant la création du client');
                    }
                } else {
                    return redirect()->back()->with('error', 'Balance du partenaire trop basse');
                }
            } else {
                return redirect()->back()->with('error', 'Partenaire en statut inactif ou non reconnu');
            }
        }

        return redirect()->back()->with('error', 'Demande non aboutie, solde inférieur à la somme');
    }

    public function generate()
    {
        $valeurs = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $length = 6;
        $generatedString = '';

        for ($i = 0; $i < $length; $i++) {
            $generatedString .= $valeurs[rand(0, strlen($valeurs) - 1)];
        }

        return $generatedString;
    }

    public function generatekey()
    {
        $valeurs = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $length = 9;
        $generatedString = '';

        for ($i = 0; $i < $length; $i++) {
            $generatedString .= $valeurs[rand(0, strlen($valeurs) - 1)];
        }

        return $generatedString;
    }

    public function identifiant()
    {
        $ids = $this->partenaire->partenaires();
        $generate = '';

        do {
            $generate = $this->generate();
            $isDuplicate = false;

            foreach ($ids as $id) {
                if (isset($id->identifiant) && $id->identifiant === $generate) {
                    $isDuplicate = true;
                    break;
                }
            }
        } while ($isDuplicate);

        return $generate;
    }

    public function idtr()
    {
        $ids = $this->partenaire->transactions();
        $generate = '';

        do {
            $generate = $this->generatekey();
            $isDuplicate = false;

            foreach ($ids as $id) {
                if (isset($id->identifiant) && $id->identifiant === $generate) {
                    $isDuplicate = true;
                    break;
                }
            }
        } while ($isDuplicate);

        return $generate;
    }
}
