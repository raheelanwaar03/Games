<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Games;
use App\Models\user\AddToCart;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function index(Request $request, $id)
    {
        $game = Games::find($id);
        $game_id = $game->id;
        $game_commission = $game->commission;
        $game_price = $game->price;

        // calculating price according to qty

        $total_price = $game_price * $request->qty;

        // Storing item in cart

        $cart = new AddToCart();
        $cart->user_id = auth()->user()->id;
        $cart->game_id = $game_id;
        $cart->price = $game_price;
        $cart->qty = $request->qty;
        $cart->total_price = $total_price;
        $cart->commission = $game_commission;
        $cart->save();
        return redirect()->back()->with('success','Game Added To Cart Successfuly!');
    }
}
