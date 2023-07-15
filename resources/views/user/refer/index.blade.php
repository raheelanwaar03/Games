@extends('user.layout.app')

@section('content')
    <!-- welcome slider Section -->
    <section class="invite mx-3 d-flex flex-column h-100 mb-5 pb-5">
        <div class="d-flex justify-content-between align-items-center my-3">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="terms-card flex-grow-1">
            <h1 class="text-center pt-4">Earn commission on
                inviting your friends</h1>
            <div class="d-flex justify-content-center my-5 py-5">
                <img src="{{ asset('assets/invite.jpeg') }}" class="img-fluid img-responsive" height="200" width="200"
                    alt="">
            </div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control bg-transparent text-white"
                value="{{ route('register', ['referal' => Auth::user()->email]) }}" id="myInput" readonly>
        </div>
        <div class="btns mt-4 d-flex justify-content-center gap-4">
            <a onclick="copy()" class="gradient-btn-full">Copy Invitation</a>
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

            var sharingURL = copyText + encodeURIComponent(link);

            // Open a new window for sharing
            window.open(sharingURL, "_blank", "width=600,height=400");

        }
    </script>
@endsection
