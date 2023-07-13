<?php

namespace App\Http\Controllers;

use App\Models\auth\OtpVerfication;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OTPController extends Controller
{
    public function enterOtp()
    {
        return view('auth.otpVerfication');
    }

    public function verifyOtp(Request $request)
    {

        $request->validate([
            'otp' => ['required','numeric'],
        ]);

        $otp = OtpVerfication::where('otp', $request->otp)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if (!$otp) {
            return redirect()->back()->with('error','OTP is Invalid or Expired');
        }

        $user = User::where('email', auth()->user()->email)->first();
        $user->email_verified_at = Carbon::now();
        $user->save();
        $otp->delete();
        return redirect()->route('User.Dashboard')->with('success','Your email is verified successfully');


    }

}
