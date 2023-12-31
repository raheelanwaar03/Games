<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminWallet;
use App\Models\User;
use App\Models\user\UserDeposit;
use App\Models\user\UserTranscations;
use Illuminate\Http\Request;

class UserDepositController extends Controller
{

    public function index(Request $request)
    {
        $wallet = AdminWallet::where('status','1')->first();
        $amount = $request->amount;
        return view('user.deposit.index',compact('amount','wallet'));
    }

    public function store(Request $request,$amount)
    {
        $validated = $request->validate([
            'screen_shot' => 'required',
        ]);


        $image = $validated['screen_shot'];
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $deposit = new UserDeposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->user_name = auth()->user()->name;
        $deposit->amount = $amount;
        $deposit->screen_shot = $imageName;
        $deposit->save();

        $user_transcation = new UserTranscations();
        $user_transcation->user_id = auth()->user()->id;
        $user_transcation->amount = $amount;
        $user_transcation->type = 'deposit';
        $user_transcation->status = 'pending';
        $user_transcation->save();

        return redirect()->route('User.Dashboard')->with('success', 'Your request has been submit. Admin will check and do his further procedure');
    }

    public function amount()
    {
        return view('user.deposit.amount');
    }



}
