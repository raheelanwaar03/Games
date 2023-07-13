<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\auth\OtpVerfication;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($referal = 'default'): View
    {
        return view('auth.register',compact('referal'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referal' => $request->referal,
        ]);

        event(new Registered($user));

        Auth::login($user);

        // $otp = OtpVerfication::create([
        //     'user_id' => $user->id,
        //     'otp' => rand(10000, 99999),
        //     'expires_at' => Carbon::now()->addSeconds(90),
        // ]);
        // Mail::to($user->email)->send(new VerifyEmail($otp));


        return redirect(RouteServiceProvider::HOME);
    }
}
