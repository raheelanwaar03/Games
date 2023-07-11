@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Recharge</h1>
    </div>
@endsection

@section('content')
    <section class="profile deposit px-3 pb-5">
        <div class="d-flex justify-content-between align-items-center py-4">
            <p class="mb-0 text-white mt-3">
                1. The payment amount must be the same as the order amount, otherwise it will not be automatically credited
                to the amount.
                <br>
                <br>
                2. If the deposit and withdrawal are not received, please consult your superior for other questions.
            </p>
            <span> </span>
        </div>
        <hr color="white">

        <div class="profile-card px-2 py-3 pb-5 mb-5 rounded-4">
            <form action="{{ route('User.Deposit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-around align-items-center">
                    <p class="text-white">Recharge Type</p>
                    <div class="input-box">
                        <input type="text" name="type" value="TRC20" readonly>
                    </div>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p class="text-white">Recharge Amount</p>
                    <div class="input-field">
                        <input type="text" name="amount" class="input-box text-white" list="amounts" placeholder="Select or type...">
                        <datalist id="amounts">
                          <option value="30$">30$</option>
                          <option value="100$">100$</option>
                          <option value="1000$">1000$</option>
                        </datalist>
                      </div>
                </div>
                <div class="w-100">
                    <hr style="color: white;">
                </div>
                <div class="mt-5">
                    <button type="submit" class="gradient-btn-full">Proceed</button>
                </div>
            </form>
        </div>
    </section>
@endsection
