<?php

use App\Http\Controllers\user\AddToCartController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserDepositController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/Games', [UserDashboardController::class, 'games'])->name('Games');
    // cart items
    Route::post('/Add-To-Cart/{id}', [AddToCartController::class, 'index'])->name('Cart');
    Route::get('/Cart/Items', [AddToCartController::class, 'items'])->name('Cart.Items');
    Route::get('/Cart/Payment', [AddToCartController::class, 'cartPayment'])->name('Cart.Payment');
    Route::post('/Cart/Games/Bill', [AddToCartController::class, 'cartBill'])->name('Cart.Games.Bill');
    // Deposit Routes
    Route::get('/Deposit',[UserDepositController::class,'index'])->name('Deposit');
    Route::post('/Store/Deposit',[UserDepositController::class,'store'])->name('Store.Deposit');

});
