<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\GameOrdersController;
use App\Http\Controllers\admin\GamesController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('admin','auth')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('Users',[AdminDashboardController::class,'users'])->name('All.Users');
    Route::get('Add/Game',[GamesController::class,'index'])->name('Add.Game');
    Route::post('Store/Game',[GamesController::class,'store'])->name('Store.Game');
    Route::get('All/Games',[GamesController::class,'all'])->name('All.Games');
    Route::get('Del/Game/{id}',[GamesController::class,'delete'])->name('Delete.Game');
    // Games orders
    Route::get('All/Orders',[GameOrdersController::class,'index'])->name('All.Orders');
    Route::get('All/Approved/Games/Orders',[GameOrdersController::class,'approvedGames'])->name('All.Approved.Orders');
    Route::get('All/Rejected/Games/Orders',[GameOrdersController::class,'rejectedGames'])->name('All.Rejected.Orders');
    Route::get('Make/Order/Approved/{id}',[GameOrdersController::class,'approve'])->name('Make.Order.Approved');
    Route::get('Make/Order/Rejected/{id}',[GameOrdersController::class,'reject'])->name('Make.Order.Rejected');

});

