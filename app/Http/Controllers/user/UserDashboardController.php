<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Games;
use App\Models\user\AddToCart;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $games = Games::get();
        $cart = AddToCart::where('user_id',auth()->user()->id)->first();
        return view('user.dashboard',compact('games','cart'));
    }

    public function games()
    {
        $games = Games::get();
        return view('user.games.index',compact('games'));
    }

}
