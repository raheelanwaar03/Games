<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\auth\OtpVerfication;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function resendOtp()
    {
        // sending otp again
        $otp = OtpVerfication::where('id', auth()->user()->id)
            ->where('expires_at', '>', Carbon::now())
            ->first();

            if($otp != null)
            {
                return redirect()->back()->with('error','wait for 90 sec then click again');
            }
            else
            {
                $otp = OtpVerfication::create([
                    'user_id' => auth()->user()->id,
                    'otp' => rand(10000, 99999),
                    'expires_at' => Carbon::now()->addSeconds(90),
                ]);

                Mail::to(auth()->user()->email)->send(new VerifyEmail($otp));

                return redirect()->back()->with('success','We have sent you a new OTP');

            }


    }


}
