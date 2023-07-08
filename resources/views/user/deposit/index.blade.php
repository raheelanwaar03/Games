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
            <img src="{{ asset('assets/img/Qr.jpeg') }}" height="200px" width="200px" alt="Qr">
        </div>
        <div class="input-box">
            <input type="text" value="0xb99826f0a1c4b3e42dddfe70c57d2e9e6a944c6f" style="width: 100%" id="myInput"
                readonly />
            <a onclick="copy()" class="ref-copy pr-4" style="border-radius:10px;"><i class="fa fa-copy"></i></a>
        </div>

        <div class="profile-card px-2 py-3 pb-5 mb-5 rounded-4">
            <form action="{{ route('User.Store.Deposit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-box">
                    <input type="text" name="amount" style="width: 100%" placeholder="Enter Amount " />
                </div>
                <div class="input-box">
                    <input type="text" name="trx_id" style="width: 100%" placeholder="Enter TrxId " />
                </div>
                <div class="input-box gap-1">
                    <input type="file" name="screen_shot">
                </div>
                <button type="submit" class="gradient-btn-full">Submit</button>
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
