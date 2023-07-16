<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminWallet;
use Illuminate\Http\Request;

class AdminWalletController extends Controller
{
    public function add()
    {
        $wallet = AdminWallet::where('status', '1')->first();
        return view('admin.wallet.add', compact('wallet'));
    }

    public function edit(Request $request, $id)
    {
        // image
        $image = $request->qr;
        $imageName = rand(00000, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $wallet = AdminWallet::find($id);
        $wallet->wallet_address = $request->wallet_address;
        $wallet->qr = $imageName;
        $wallet->save();

        return redirect()->back()->with('success', 'Wallet Address Changed Successfully');
    }
}
