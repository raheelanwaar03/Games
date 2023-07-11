@extends('auth.layout.app')
@section('content')
<div class="login-email">
    <div class="login-card">
        <div class="login-logo">
            <img class="img-fluid logo" src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-box">
                <img src="{{ asset('assets/img/user.png') }}" height="18" width="18" alt="">
                <input type="text" name="name" placeholder="User Name">
            </div>
            <div class="input-box">
                <img src="{{ asset('assets/img/email.png') }}" height="15" width="20" alt="">
                <input type="email" name="email" placeholder="Email">
            </div>
            <input type="hidden" name="referal" value="{{ $referal }}">
            <div class="input-box">
                <img src="{{ asset('assets/img/lock.png') }}" height="18" width="14" alt="">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="input-box">
                <img src="{{ asset('assets/img/lock.png') }}" height="18" width="14" alt="">
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <input type="hidden" name="referal" value="{{ $referal }}">
            <label class="mb-3">
                <input type="checkbox" checked="checked">
                I agree to sports betting <a href="terms.html" class="text-blue">Terms and services</a>,
                Privacy policy and content Privacy
            </label>
            <button class="gradient-btn-full">Register</button>
        </form>
        <p class="text-center mt-2">Already have an account? <a href="{{ route('login') }}"
                class="text-blue">Login</a></p>
    </div>
</div>
@endsection
