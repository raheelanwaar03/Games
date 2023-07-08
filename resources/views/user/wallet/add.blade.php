@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Add Wallet</h1>
    </div>
@endsection

@section('content')
    <section class="profile deposit px-3 pb-5">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <p class="mb-0 text-white">Enter your wallet address and remember your 5 digits pin. It will use while widthrawal.</p>
            <span> </span>
        </div>
        <div class="profile-card px-2 py-3 pb-5 mb-5 rounded-4">
            <form action="{{ route('User.Store.Wallet') }}" method="POST">
                @csrf
                <div class="input-box">
                    <select name="type">
                        <option value="trc20">Trc20</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="text" name="user_name" style="width: 100%" placeholder="Enter account title " />
                </div>
                <div class="input-box">
                    <input type="text" name="wallet_address" style="width: 100%" placeholder="Enter wallet address " />
                </div>
                <div class="input-box">
                    <input type="number" name="pin" style="width: 100%" maxlength="5" placeholder="Enter your 5 digits secret pin" />
                </div>
                <button type="submit" class="gradient-btn-full">Submit</button>
            </form>
        </div>
    </section>
@endsection
