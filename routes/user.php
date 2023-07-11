<?php

use App\Http\Controllers\user\AddToCartController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserDepositController;
use App\Http\Controllers\user\UserWidthrawController;
use App\Models\user\WidthrawBalance;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/Games', [UserDashboardController::class, 'games'])->name('Games');
    Route::get('/Refer/Friend', [UserDashboardController::class, 'refer'])->name('Refer.Friend');
    // cart items
    Route::post('/Add-To-Cart/{id}', [AddToCartController::class, 'index'])->name('Cart');
    Route::get('/Cart/Items', [AddToCartController::class, 'items'])->name('Cart.Items');
    Route::get('/Cart/Payment', [AddToCartController::class, 'cartPayment'])->name('Cart.Payment');
    Route::post('/Cart/Games/Bill', [AddToCartController::class, 'cartBill'])->name('Cart.Games.Bill');
    // Deposit Routes
    Route::get('/Deposit/Amount',[UserDepositController::class,'amount'])->name('Deposit.Amount');
    Route::post('/Deposit',[UserDepositController::class,'index'])->name('Deposit');
    Route::post('/Store/Deposit/{amount}',[UserDepositController::class,'store'])->name('Store.Deposit');
    // Widthraw Routes
    Route::get('Widthraw/Balance',[UserWidthrawController::class,'widthraw'])->name('Widthraw');
    Route::get('See/All/Transcations',[UserWidthrawController::class,'seeAll'])->name('See.All.Transcations');
    Route::post('Store/Widthraw',[UserWidthrawController::class,'storeWidthraw'])->name('Store.Widthraw');
    // add Wallet
    Route::get('Add/Wallet',[UserDashboardController::class,'addWallet'])->name('Add.Wallet');
    Route::post('Store/Wallet',[UserDashboardController::class,'storeWallet'])->name('Store.Wallet');
    Route::get('Setting',[UserDashboardController::class,'setting'])->name('Setting');
    Route::get('Account/Report',[UserDashboardController::class,'report'])->name('Account.Report');

});
