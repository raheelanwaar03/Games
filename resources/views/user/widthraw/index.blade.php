@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Widthraw Balance</h1>
    </div>
@endsection

@section('content')
    <section class="profile deposit px-3 pb-5">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <p class="mb-0 text-white">1. Enter the amount and your secret 5 digits pin to start widthraw process.
                <br>
                <br>
                2. If you need to modify,please contact customer service.
            </p>
            <span> </span>
        </div>
        <div class="profile-card px-2 py-3 pb-5 mb-5 rounded-4">
            <form action="{{ route('User.Store.Widthraw') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="type" value="{{ $wallet->type }}" style="width: 100%" readonly>
                </div>
                <div class="input-box">
                    <input type="text" name="user_name" value="{{ $wallet->user_name }}" style="width: 100%" readonly />
                </div>
                <div class="input-box">
                    <input type="text" name="wallet_address" value="{{ $wallet->wallet_address }}" style="width: 100%" readonly />
                </div>
                <div class="input-box">
                    <input type="number" name="pin" style="width: 100%" maxlength="5"
                        placeholder="Enter your 5 digits secret pin" />
                </div>
                <div class="input-box">
                    <input type="number" name="amount" style="width: 100%" maxlength="5"
                        placeholder="Enter Amount" />
                </div>
                <button type="submit" class="gradient-btn-full">Submit</button>
            </form>
        </div>
    </section>
@endsection
