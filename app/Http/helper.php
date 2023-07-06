<?php

use App\Models\user\AddToCart;

function totalPrice()
{
    $cart = AddToCart::where('user_id', auth()->user()->id)->get();

    $totalPrice = 0;

    foreach ($cart as $item) {
        $totalPrice += $item->total_price;
    }

    return $totalPrice;
}
