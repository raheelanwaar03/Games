<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Games;
use App\Models\user\AddToCart;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function index(Request $request,$id)
    {
        $game = Games::find($id);
        $game_id = $game->id;
        $game_price = $game->price;
        // return $game;

        // calculating price according to qty

        $total_price = $game_price * $request->price;
        return $total_price;

        // Storing item in cart

        // $cart = new AddToCart();
        // $cart->user_id = auth()->user()->id;
        // $cart->game_id = $game_id;
        // $cart->price =




    }
}
