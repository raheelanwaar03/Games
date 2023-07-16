@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Recharge</h1>
    </div>
@endsection

@section('content')
    <section class="profile deposit px-3 pb-5">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <p class="mb-0 text-white">Send the amount on our given wallet which you want to add in your wallet address and
                enter screenshot with TrxId below.</p>
            <span> </span>
        </div>
        <div class="text-center mb-3">
            <img src="{{ asset('images/'.$wallet->qr) }}" height="200px" width="200px" alt="Qr">
        </div>
        <div class="input-box">
            <input type="text" value="{{ $wallet->wallet_address }}" style="width: 100%" id="myInput"
                readonly />
            <a onclick="copy()" class="ref-copy pr-4" style="border-radius:10px;"><i class="fa fa-copy"></i></a>
        </div>
        <hr color="white">

        <div class="profile-card px-2 py-3 pb-5 mb-5 rounded-4">
            <form action="{{ route('User.Store.Deposit',['amount'=>$amount]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <p class="text-white">Payment Screenshot</p>
                <div class="custom-file border-doted d-flex justify-content-center align-items-center pmd-custom-file text-center"
                    style="width: 100%;height:15vh;">
                    <input type="file" name="screen_shot" id="uploadBtn" style="display: none;">
                    <label for="uploadBtn" class="bg-primary btn btn-primary" style="border-radius:15px">Upload Now</label>
                </div>
                <div class="mt-5">
                    <button type="submit" class="gradient-btn-full">Confirm Recharge</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
