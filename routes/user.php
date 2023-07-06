<?php

use App\Http\Controllers\user\AddToCartController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('auth','user')->group(function(){

Route::get('/Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');
Route::get('/Games',[UserDashboardController::class,'games'])->name('Games');

Route::post('/Add-To-Cart/{id}',[AddToCartController::class,'index'])->name('Cart');
Route::get('/Cart/Items',[AddToCartController::class,'items'])->name('Cart.Items');


});
