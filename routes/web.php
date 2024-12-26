<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BonController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\OperateurReseauController;
use App\Http\Controllers\PartenaireCommercialController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\WalletController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//GET

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/bons', [BonController::class, 'create'])->name('bon-create')->middleware('admin');
    Route::get('/bons-ravitaillement', [BonController::class, 'ravitailler'])->name('bon-ravitailler')->middleware('admin');
    Route::get('/comptes.actifs', [AuthController::class, 'account_actif'])->name('account-actif')->middleware('admin');
    Route::post('/transfer-gain-to-wallet/{userId}', [WalletController::class, 'transferGainToWallet'])->name('wallet.transfer_gain_to_balance');
    Route::post('/transfer-to-other-wallet/{userId}', [WalletController::class, 'transferToOtherWallet'])->name('wallet.wallet_to_wallet');
    Route::get('/wallet/history', [WalletController::class, 'transactionHistory'])->name('wallet.history');
    Route::get('/operateur_reseau', [OperateurReseauController::class, 'index'])->name('operateur.index');
    Route::get('/partenaire_commmercial', [PartenaireCommercialController::class, 'index'])->name('partenaire.index');
    Route::post('coupon/{coupon}/activate', [BonController::class, 'activate'])->name('coupon.activate');

});
//reset
Route::get('/modify-password-get', [AuthController::class, 'get_update'])->name('get_update')
    ->middleware('auth');
Route::get('/reset-password', [AuthController::class, 'reset'])->name('reset-password');
Route::get('/password/verification', [AuthController::class, 'password'])->name('password-reset');
Route::get('/code/verification', [AuthController::class, 'code'])->name('code-reset');
Route::get('/generate', [CodeController::class, 'index'])->name('generate')->middleware('auth');
Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/coming-soon', [AuthController::class, 'coming'])->name('coming-soon')
    ->middleware('auth');
Route::get('/settings', [AuthController::class, 'settings'])->name('settings')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/parrains', [AuthController::class, 'all'])->name('parrains');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/trans-create', [TransactionController::class, 'index'])->name('trans-create');
Route::get('/retrait', [TransactionController::class, 'retrait'])->name('retrait')->middleware('auth');
Route::get('/sign-up', [AuthController::class, 'sign_up'])->name('sign-up');
Route::get('/numero-reseau', [TransactionController::class, 'reseau_form'])
    ->name('reseau.verify')->middleware(['auth', 'phone.guest']);



Route::middleware(['auth', 'phone.verify'])->group(function () {
    Route::get('/portefeuille', [TransactionController::class, 'portefeuille'])->name('porte-f');

    Route::post('/transfer-gain-to-wallet/{userId}', [WalletController::class, 'transferGainToWallet'])->name('wallet.transfer_gain_to_balance');
    Route::post('/transfer-to-other-wallet/{userId}', [WalletController::class, 'transferToOtherWallet'])->name('wallet.wallet_to_wallet');
    Route::get('/wallet/history', [WalletController::class, 'transactionHistory'])->name('wallet.history');
    Route::get('transactions/export/{format}', [WalletController::class, 'export'])->name('transactions.export');
});





Route::get('/demande-operateur', [OperateurController::class, 'create'])
    ->name('demande.operateur')
    ->middleware(['auth']);
Route::get('/info-operateur', [OperateurController::class, 'info'])
    ->name('info.operateur')
    ->middleware(['auth']);


Route::get('/demande-partenaire', [PartenaireController::class, 'create'])
    ->name('demande.partenaire')
    ->middleware(['auth', 'partenaire']);
Route::get('/info-partenaire', [PartenaireController::class, 'info'])
    ->name('info.partenaire')
    ->middleware(['auth']);

//POST
Route::post('/modify-password', [AuthController::class, 'post_update'])->name('post_update');
Route::post('/generate-link', [LinkController::class, 'createLink'])->name('generate-link');
Route::post('/code/envoyer', [AuthController::class, 'emailCode'])->name('email.code');
Route::post('/password/envoyer', [AuthController::class, 'postPassword'])->name('password.reset');
Route::post('/password-reset', [AuthController::class, 'email'])->name('password.email');
Route::post('/login', [AuthController::class, 'post_login'])->name('post_login');
Route::post('/sign-up', [AuthController::class, 'post_sign_up'])->name('post_sign_up');
Route::post('/bons', [BonController::class, 'store'])->name('bon-store');
Route::post('/trans-store', [TransactionController::class, 'store'])->name('trans-store');
Route::post('/post-jetons', [TransactionController::class, 'post_jetons'])->name('post-jetons');
Route::post('/bon-update', [BonController::class, 'update'])->name('bon-update');
Route::post('/bon-ravitaillement', [BonController::class, 'ravita'])->name('bon-ravita');
Route::post('/reseau-number', [BonController::class, 'reseau_number'])->name('reseau-number');
//operateurs
Route::middleware([
    'auth',
    'admin'
])->group(function () {
    Route::get('/operateurs', [OperateurController::class, 'operateurs'])
        ->name('operateurs');
    Route::get('/chargement', [OperateurController::class, 'coin_balance'])
        ->name('coin-create-operator');
});
Route::get('/mes-retraits', [TransactionController::class, 'historique'])->name('mes-retrait')->middleware('auth');
Route::get('/mes-validations', [TransactionController::class, 'validation'])->name('mes-validation')->middleware('auth');
Route::post('/post-activer', [OperateurController::class, 'activer'])
    ->name('post-activer');
Route::post('/post-suspendre', [OperateurController::class, 'suspendre'])
    ->name('post-suspendre');
Route::post('/post-deactiver', [OperateurController::class, 'deactiver'])
    ->name('post-deactiver');
Route::post('/cash', [OperateurController::class, 'cash'])
    ->name('cash');
Route::post('/post-operateur', [OperateurController::class, 'post_operateur'])
    ->name('post-operateur');
Route::post('/update-operateur', [OperateurController::class, 'update_operateur_localite'])
    ->name('post-update-localite');
Route::post('/chargement-balance', [OperateurController::class, 'chargement'])
    ->name('coin-chargemnt');


//partenaires
Route::middleware([
    'auth',
    'admin'
])->group(function () {
    Route::get('/partenaires', [PartenaireController::class, 'partenaires'])
        ->name('partenaires');
    Route::get('/chargement-partenaire', [PartenaireController::class, 'coin_balance'])
        ->name('coin-create-partenaire');
});
Route::post('/post-activer-partenaire', [PartenaireController::class, 'activer'])
    ->name('post-activer-partenaire');
Route::post('/post-suspendre-partenaire', [PartenaireController::class, 'suspendre'])
    ->name('post-suspendre-partenaire');
Route::post('/post-deactiver-partenaire', [PartenaireController::class, 'deactiver'])
    ->name('post-deactiver-partenaire');
Route::post('/cash-partenaire', [PartenaireController::class, 'cash'])
    ->name('cash-partenaire');
Route::post('/post-partenaire', [PartenaireController::class, 'post_partenaire'])
    ->name('post-partenaire');
Route::post('/update-partenaire', [PartenaireController::class, 'update_partenaire_localite'])
    ->name('post-update-localite-partenaire');
Route::post('/chargement-balance-partenaire', [PartenaireController::class, 'chargement'])
    ->name('coin-chargemnt-partenaire');

