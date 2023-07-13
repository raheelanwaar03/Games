@extends('auth.layout.app')

@section('content')
    <div class="login-email">
        <div class="top-bg">
        </div>
        <div class="login-card">
            <div class="login-logo">
                <img class="img-fluid logo" src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
            <form action="{{ route('login') }}" method='POST'>
                @csrf
                <div class="input-box">
                    <img src="{{ asset('assets/img/email.png') }}" height="15" width="20" alt="">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-box">
                    <img src="{{ asset('assets/img/lock.png') }}" height="18" width="14" alt="">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <label class="mb-3">
                    <input type="checkbox" name="remember" checked="checked">
                    Keep me login
                </label>
                <button class="gradient-btn-full">Login</button>
            </form>
            <p class="text-center mt-2">Already have an account? <a href="{{ route('register') }}"
                    class="text-blue">Register</a></p>
        </div>
    </div>
@endsection
