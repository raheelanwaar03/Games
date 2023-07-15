<?php

use App\Models\User;
use App\Models\user\AddToCart;
use App\Models\user\UserTranscations;
use App\Models\user\WidthrawBalance;

function totalPrice()
{
    $cart = AddToCart::where('user_id', auth()->user()->id)->get();

    $totalPrice = 0;

    foreach ($cart as $item) {
        $totalPrice += $item->total_price;
    }

    return $totalPrice;
}

function totalUsers()
{
    $user = User::all();
    $total_users = $user->count();
    return $total_users;
}


function approvedWidthraw()
{
    $widthrawals = WidthrawBalance::where('status','approved')->get();
    $total_widthraw = 0;

    foreach($widthrawals as $widthraw)
    {
        $total_widthraw += $widthraw->amount;
    }
    return $total_widthraw;
}

function allWidthraw()
{
    $widthrawals = WidthrawBalance::get();
    $total_widthraw = 0;

    foreach($widthrawals as $widthraw)
    {
        $total_widthraw += $widthraw->amount;
    }

    return $total_widthraw;
}

function pendingWidthraw()
{
    $widthrawals = WidthrawBalance::where('status','pending')->get();
    $total_widthraw = 0;

    foreach($widthrawals as $widthraw)
    {
        $total_widthraw += $widthraw->amount;
    }

    return $total_widthraw;
}

function rejectedWidthraw()
{
    $widthrawals = WidthrawBalance::where('status','rejected')->get();
    $total_widthraw = 0;

    foreach($widthrawals as $widthraw)
    {
        $total_widthraw += $widthraw->amount;
    }
    return $total_widthraw;
}

function totalIncome()
{
    $incomes = UserTranscations::where('user_id',auth()->user()->id)->where('status','approved')->get();

    $totalIncome = 0;
    foreach($incomes as $income)
    {
        $totalIncome += $income->amount;
    }
    return $totalIncome;
}


function totalCommission()
{
    $cart = AddToCart::where('user_id', auth()->user()->id)->get();

    $totalCommission = 0;
    foreach ($cart as $item) {
        $totalCommission += $item->commission;
    }

    return $totalCommission;

}





