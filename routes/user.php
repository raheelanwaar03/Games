<?php

use App\Http\Controllers\user\AddToCartController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserDepositController;
use App\Http\Controllers\user\UserWidthrawController;
use App\Models\user\WidthrawBalance;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/Agreement', [UserDashboardController::class, 'agreement'])->name('Agreement');
    Route::get('/Games', [UserDashboardController::class, 'games'])->name('Games');
    Route::get('/Help/Center', [UserDashboardController::class, 'helpCenter'])->name('Help/Center');
    Route::get('/Refer/Friend', [UserDashboardController::class, 'refer'])->name('Refer.Friend');
    // cart items
    Route::post('/Add-To-Cart/{id}', [AddToCartController::class, 'index'])->name('Cart');
    Route::get('/Cart/Items', [AddToCartController::class, 'items'])->name('Cart.Items');
    Route::get('/Show/Details/{id}', [AddToCartController::class, 'details'])->name('Show.Details');
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
    // change wallet address
    Route::get('Modify/Fund/Password',[UserWidthrawController::class,'fundPassword'])->name('Fund.Password');
    Route::post('Update/Fund/Password',[UserWidthrawController::class,'updateFundPassword'])->name('Update.Fund.Password');
    Route::get('Change/Wallet/Address',[UserWidthrawController::class,'changeWallet'])->name('Change.Wallet.Address');
    Route::post('Update/Wallet/Address',[UserWidthrawController::class,'updateWallet'])->name('Update.Wallet.Address');
    // add Wallet
    Route::get('Add/Wallet',[UserDashboardController::class,'addWallet'])->name('Add.Wallet');
    Route::post('Store/Wallet',[UserDashboardController::class,'storeWallet'])->name('Store.Wallet');
    Route::get('Account/Report',[UserDashboardController::class,'report'])->name('Account.Report');
    Route::get('Setting/Links',[UserDashboardController::class,'links'])->name('Setting.Links');
    Route::get('Setting',[UserDashboardController::class,'setting'])->name('Setting');
    // referal friends
    Route::get('Referal/Friends',[UserDashboardController::class,'referals'])->name('Referals');

});
