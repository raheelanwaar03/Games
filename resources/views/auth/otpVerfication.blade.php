@extends('auth.layout.app')

@section('content')
    <section class="invite mx-3">
        <div class="d-flex justify-content-between align-items-center my-3">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
            <p class="mb-0">Verify Email</p>
            <a href="#">
                <i class="bi bi-gear"></i>
            </a>
        </div>
        <div class="terms-card">
            <div class="d-flex justify-content-center pt-4">
                <img src="{{ asset('assets/img/recover.png') }}" alt="" class="img-fluid" height="150"
                    width="150">
            </div>
            <h1 class="text-center mt-3">Verification Code</h1>
            <p class="text-center mb-5">We have sent a verification code to your email you use while registeration. IF you
                have not recived your OTP then Click on <a href="{{ route('Resend.Otp') }}" class="btn btn-sm btn-primary">Resend
                    OTP</a></p>
            <form action="{{ route('Verify.Otp') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="number" name="otp" class="form-control bg-transparent text-white"
                        style="border: 1px solid white;" maxlength="5">
                </div>
                <button type="submit" class="gradient-btn-full mt-4">Verify</button>
            </form>
        </div>
    </section>
@endsection
