<?php

use App\Models\User;
use App\Models\user\AddToCart;
use App\Models\user\UserTranscations;
use App\Models\user\WidthrawBalance;
use Carbon\Carbon;


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
    $widthrawals = WidthrawBalance::where('status', 'approved')->get();
    $total_widthraw = 0;

    foreach ($widthrawals as $widthraw) {
        $total_widthraw += $widthraw->amount;
    }
    return $total_widthraw;
}

function allWidthraw()
{
    $widthrawals = WidthrawBalance::get();
    $total_widthraw = 0;

    foreach ($widthrawals as $widthraw) {
        $total_widthraw += $widthraw->amount;
    }

    return $total_widthraw;
}

function pendingWidthraw()
{
    $widthrawals = WidthrawBalance::where('status', 'pending')->get();
    $total_widthraw = 0;

    foreach ($widthrawals as $widthraw) {
        $total_widthraw += $widthraw->amount;
    }

    return $total_widthraw;
}

function rejectedWidthraw()
{
    $widthrawals = WidthrawBalance::where('status', 'rejected')->get();
    $total_widthraw = 0;

    foreach ($widthrawals as $widthraw) {
        $total_widthraw += $widthraw->amount;
    }
    return $total_widthraw;
}

function totalIncome()
{
    $incomes = UserTranscations::where('user_id', auth()->user()->id)->where('status', 'approved')->get();

    $totalIncome = 0;
    foreach ($incomes as $income) {
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


// getting user yesterday team income


function totalTeamIncome()
{
    $users = UserTranscations::where('user_id',auth()->user()->id)->where('status', 'given')->where('type', 'rebate')->get();

    // Total commission
    $total_team_commission  = 0;

    foreach($users as $user)
    {
        $total_team_commission += $user->amount;
    }

    return $total_team_commission;


    // getting users transcations

    // foreach ($users as $user) {
    //     $userTranscation = UserTranscations::where('user_id', $user->id)->where('status', 'given')->where('type', 'daily profit')->get();
    //     $users_Total_commission = 0;
    //     foreach($userTranscation as $transcation)
    //     {
    //         $users_Total_commission += $transcation->amount;
    //     }

    //     $total_team_commission += $users_Total_commission;
    // }

    // $total_take_commission = $total_team_commission *  /100;

}


function yesterdayTeamProfit()
{
    $users = UserTranscations::where('user_id',auth()->user()->id)->where('status', 'given')->where('type', 'rebate')->whereDate('created_at',Carbon::yesterday())->get();

    // Total commission
    $total_team_commission  = 0;

    foreach($users as $user)
    {
        $total_team_commission += $user->amount;
    }

    return $total_team_commission;
}


function todayReferals()
{
    $users = User::where('referal',auth()->user()->email)->whereDate('created_at',Carbon::today())->get();
    $totalUsers = $users->count();
    return $totalUsers;
}

function todayUsers()
{
    $users = User::whereDate('created_at',Carbon::today())->get();
    $totalUser = $users->count();
    return $totalUser;
}

