<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\GameOrdersController;
use App\Http\Controllers\admin\GamesController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('admin','auth')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('Edit/User/{id}',[AdminDashboardController::class,'editUser'])->name('Edit.User');
    Route::post('Update/User/{id}',[AdminDashboardController::class,'updateUser'])->name('Update.User');
    Route::get('Daily/Bounce',[AdminDashboardController::class,'bounce'])->name('Daily.Bounce');
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
    // Deposit requests
    Route::get('All/Deposit/Requests',[AdminDashboardController::class,'allDeposit'])->name('All.Deposit');
    Route::get('All/Approved/Deposit',[AdminDashboardController::class,'approvedDeposit'])->name('Approved.Deposit');
    Route::get('All/Rejected/Deposit',[AdminDashboardController::class,'rejectedDeposit'])->name('Rejected.Deposit');
    Route::get('Make/Approve/{id}',[AdminDashboardController::class,'makeApprove'])->name('Make.Approve');
    Route::get('Make/Reject/{id}',[AdminDashboardController::class,'makeReject'])->name('Make.Reject');


});

