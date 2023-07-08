<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\GamesPrice;
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
        $game->status = 'approved';
        $game->save();
        return redirect()->back()->with('success', 'User Game Order Approved Successfully');
    }

    public function reject($id)
    {
        $game = GamesPrice::find($id);
        $game->status = 'rejected';
        $game->save();
        return redirect()->back()->with('error', 'User Game Order Rejected Successfully');
    }
}
