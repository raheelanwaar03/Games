<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\GamesController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('admin','auth')->group(function(){

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('Add/Game',[GamesController::class,'index'])->name('Add.Game');
    Route::post('Store/Game',[GamesController::class,'store'])->name('Store.Game');
    Route::get('All/Games',[GamesController::class,'all'])->name('All.Games');



});

