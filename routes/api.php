<?php

use App\Http\Controllers\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});

// Route::post('/transfer-gain-to-wallet/{userId}', [WalletController::class, 'transferGainToWallet'])->name('wallet.transfer_gain_to_balance');
// Route::post('/transfer-to-other-wallet/{userId}', [WalletController::class, 'transferToOtherWallet'])->name('wallet.wallet_to_wallet');
