<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Games;
use App\Models\User;
use App\Models\user\AddToCart;
use App\Models\user\UserTranscations;
use App\Models\user\UserWallet;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $games = Games::paginate(10);
        $cart = AddToCart::where('user_id', auth()->user()->id)->first();
        return view('user.dashboard', compact('games', 'cart'));
    }

    public function agreement()
    {
        return view('user.agreement');
    }

    public function helpCenter()
    {
        return view('user.help');
    }

    public function games()
    {
        $games = Games::paginate(9);
        return view('user.games.index', compact('games'));
    }

    public function addWallet()
    {
        return view('user.wallet.add');
    }

    public function storeWallet(Request $request)
    {

        $wallet_address = UserWallet::where('user_id', auth()->user()->id)->first();
        if ($wallet_address != '') {
            return redirect()->back()->with('error', 'You have already entered your wallet address');
        }

        $validated = $request->validate([
            'user_name' => 'required',
            'wallet_address' => 'required',
            'type' => 'required',
            'pin' => ['required', 'max:5'],
        ]);

        $wallet = new UserWallet();
        $wallet->user_id = auth()->user()->id;
        $wallet->user_name = $validated['user_name'];
        $wallet->wallet_address = $validated['wallet_address'];
        $wallet->type = $validated['type'];
        $wallet->pin = $validated['pin'];
        $wallet->save();

        return redirect()->route('User.Widthraw')->with('success', 'Your have added wallet address successfully');
    }

    public function refer()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $userLevel = $user->level;

        if ($userLevel == 'level 1') {
            return redirect()->back()->with('error', 'Please make your level (level 1) to open your referal link');
        }

        return view('user.refer.index');
    }

    public function setting()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('user.setting.index', compact('user'));
    }

    public function report()
    {
        $user_transcations = UserTranscations::get();
        return view('user.report', compact('user_transcations'));
    }

    public function links()
    {
        return view('user.setting.links');
    }

    public function referals()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $userLevel = $user->level;

        if ($userLevel == 'level 1') {
            return redirect()->back()->with('error', 'You have not activated your referal link yet.');
        }
        $users = User::where('referal', auth()->user()->email)->get();
        return  view('user.wallet.team', compact('users'));
    }
}
