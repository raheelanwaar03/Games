@extends('auth.layout.app')

@section('content')
    <section class="profile edit-profile px-3">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <h3 class="mb-0 text-white">Change Wallet Address</h3>
            <span>
            </span>
        </div>

        <div class="d-flex justify-content-center py-4">
            <div class="position-relative">
                <img src="{{ asset('assets/img/logo.png') }}" width="55" height="55" alt="">
            </div>

        </div>

        <div class="profile-card px-2 py-3 rounded-4 mb-4">
            <form action="{{ route('User.Update.Wallet.Address') }}" method="POST">
                @csrf
                <div class="input-box gap-1">
                    <input type="text" name="wallet_address" value="{{ $wallet->wallet_address }}" placeholder="Enter your old Password">
                </div>
                <div class="">
                    <button type="submit" class="gradient-btn-full">Update</button>
                </div>
            </form>
        </div>

    </section>
@endsection
