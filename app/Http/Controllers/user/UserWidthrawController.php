<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\UserTranscations;
use App\Models\user\UserWallet;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class UserWidthrawController extends Controller
{
    public function widthraw()
    {
        $wallet = UserWallet::where('user_id', auth()->user()->id)->first();
        if ($wallet == null) {
            return redirect()->route('User.Add.Wallet')->with('error', 'Please add your wallet address first');
        }
        return view('user.widthraw.index', compact('wallet'));
    }

    public function storeWidthraw(Request $request)
    {

        $validated = $request->validate([
            'user_name' => 'required',
            'wallet_address' => 'required',
            'amount' => 'required',
            'type' => 'required',
            'pin' => ['required', 'max:5'],
        ]);

        $wallet = UserWallet::where('user_id', auth()->user()->id)->first();
        $pin = $wallet->pin;

        if ($pin != $validated['pin']) {
            return redirect()->back()->with('error', 'Please Enter correct Pin');
        }

        if (auth()->user()->balance < $validated['amount']) {
            return redirect()->back()->with('error', 'you have not enough balance');
        }

        $userWidthraw = new WidthrawBalance();
        $userWidthraw->user_id = auth()->user()->id;
        $userWidthraw->user_name = $wallet->user_name;
        $userWidthraw->wallet_address = $wallet->wallet_address;
        $userWidthraw->type = $wallet->type;
        $userWidthraw->amount = $validated['amount'];
        $userWidthraw->save();

        // dedecting amount from user balance
        $user = User::where('id', $wallet->user_id)->first();
        $user->balance -= $validated['amount'];
        $user->save();

        // adding in to user transcations

        $user_transcation = new UserTranscations();
        $user_transcation->user_id = auth()->user()->id;
        $user_transcation->amount = $validated['amount'];
        $user_transcation->type = 'widthraw';
        $user_transcation->status = 'pending';
        $user_transcation->save();

        return redirect()->back()->with('success', 'Your Widthraw process activated');
    }

    public function seeAll()
    {
        $user_transcations = UserTranscations::where('user_id', auth()->user()->id)->get();
        return view('user.widthraw.all', compact('user_transcations'));
    }


    public function fundPassword()
    {
        $wallet = UserWallet::where('user_id', auth()->user()->id)->first();
        if ($wallet == null) {
            return redirect()->route('User.Add.Wallet')->with('error', 'Please add your wallet address first');
        }
        return view('user.setting.fund');
    }

    public function updateFundPassword(Request $request)
    {
        $validated = $request->validate([
            'pin' => ['required', 'max:5'],
            'newPin' => ['required', 'max:5'],
            'confirmPin' => ['required', 'max:5'],
        ]);

        $wallet = UserWallet::where('user_id', auth()->user()->id)->first();
        $pin = $wallet->pin;

        if ($pin != $validated['pin']) {
            return redirect()->back()->with('error', 'Your new password is not match with old password');
        }

        $newPin = $validated['newPin'];
        $confirmPin = $validated['confirmPin'];

        if ($newPin != $confirmPin) {
            return redirect()->back()->with('error', 'Your new password is not matched');
        }

        $wallet->pin = $newPin;
        $wallet->save();

        return redirect()->route('User.Setting.Links')->with('success', 'Your fund password changed successfully');
    }

    public function changeWallet()
    {
        $wallet = UserWallet::where('user_id', auth()->user()->id)->first();
        if ($wallet == null) {
            return redirect()->route('User.Add.Wallet')->with('error', 'Please add your wallet address first');
        }
        return view('user.setting.wallet', compact('wallet'));
    }

    public function updateWallet(Request $request)
    {
        $wallet = UserWallet::where('user_id', auth()->user()->id)->first();
        $wallet->wallet_address = $request->wallet_address;
        $wallet->save();
        return redirect()->route('User.Setting.Links')->with('success', 'Your wallet address updated successfully');
    }
}
