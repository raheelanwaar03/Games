<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\GamesPrice;
use App\Models\user\UserTranscations;
use Illuminate\Http\Request;

class GameOrdersController extends Controller
{
    public function index()
    {
        $games = GamesPrice::where('status', 'pending')->get();
        return view('admin.orders.all', compact('games'));
    }

    public function approvedGames()
    {
        $games = GamesPrice::where('status', 'approved')->get();
        return view('admin.orders.approved', compact('games'));
    }

    public function rejectedGames()
    {
        $games = GamesPrice::where('status', 'rejected')->get();
        return view('admin.orders.rejected', compact('games'));
    }

    public function approve($id)
    {
        $game = GamesPrice::find($id);

        // getting order total price and its 3%
        $totalPrice = $game->total_price;
        $firstCommission = $totalPrice * 3 / 100;
        // getting user and adding amount to his net balance
        $user_id = $game->user_id;
        $user = User::where('id', $user_id)->first();
        $user->balance += $firstCommission;
        $user->save();
        // changing status
        $game->status = 'approved';
        $game->save();

        $user_transcation = UserTranscations::where('user_id',$game->user_id)->where('amount',$game->amount)->first();
        $user_transcation->user_id = $game->user_id;
        $user_transcation->amount = $game->amount;
        $user_transcation->type = 'invest';
        $user_transcation->status = 'approved';
        $user_transcation->save();

        return redirect()->back()->with('success', 'User Game Order Approved Successfully');
    }

    public function reject($id)
    {
        $game = GamesPrice::find($id);
        $game->status = 'rejected';
        $game->save();

        $user_transcation = UserTranscations::where('user_id',$game->user_id)->where('amount',$game->amount)->first();
        $user_transcation->user_id = $game->user_id;
        $user_transcation->amount = $game->amount;
        $user_transcation->type = 'invest';
        $user_transcation->status = 'approved';
        $user_transcation->save();

        return redirect()->back()->with('error', 'User Game Order Rejected Successfully');
    }
}
