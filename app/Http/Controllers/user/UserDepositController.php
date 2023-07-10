<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\UserDeposit;
use App\Models\user\UserTranscations;
use Illuminate\Http\Request;

class UserDepositController extends Controller
{

    public function index()
    {
        return view('user.deposit.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'trx_id' => 'required',
            'screen_shot' => 'required',
        ]);

        $image = $validated['screen_shot'];
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $deposit = new UserDeposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->user_name = auth()->user()->name;
        $deposit->trx_id = $validated['trx_id'];
        $deposit->screen_shot = $imageName;
        $deposit->save();

        // $user_transcation = new UserTranscations();
        // $user_transcation->user_id = auth()->user()->id;
        // $user_transcation->amount = $validated['amount'];
        // $user_transcation->status = 'deposit';
        // $user_transcation->save();

        return redirect()->back()->with('success', 'Your request has been submit. Admin will check and do his further procedure');
    }

    public function amount()
    {
        return view('user.deposit.amount');
    }



}
