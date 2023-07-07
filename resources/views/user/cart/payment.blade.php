@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">User Dashboard</h1>
    </div>
@endsection

@section('content')
    <section class="profile deposit px-3 pb-5">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <p class="mb-0 text-white">Send the Total payment on given wallet address and enter screenshot with TrxId below
                to earn with us.</p>
            <span> </span>
        </div>
        <div class="text-center mb-3">
            <img src="{{ asset('assets/img/Qr.jpeg') }}" height="200px" width="200px" alt="Qr">
        </div>
        <div class="input-box">
            <input type="text" value="0xb99826f0a1c4b3e42dddfe70c57d2e9e6a944c6f" style="width: 100%" id="myInput" readonly />
            <a onclick="copy()" class="ref-copy pr-4" style="border-radius:10px;"><i class="fa fa-copy"></i></a>
        </div>

        <div class="d-flex justify-content-center py-4">
            <h5>Total Amount: <span class="text-white">${{ totalPrice() }}</span></h5>
        </div>

        <div class="profile-card px-2 py-3 pb-5 mb-5 rounded-4">
            <form>
                <div class="input-box">
                    <input type="text" style="width: 100%" placeholder="Enter TrxId "/>
                </div>
                <div class="input-box gap-1">
                    <input type="file" name="Image">
                </div>
                <a href="matchboard.html" class="gradient-btn-full">Deposit</a>
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
