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
                <img src="{{ asset('assets/img/invite.png') }}" class="img-fluid" height="200" width="200"
                    alt="">
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control bg-transparent text-white"
                value="{{ route('register', ['referal' => Auth::user()->email]) }}" id="linkInput" readonly>
        </div>
        <div class="btns mt-4 d-flex justify-content-center gap-4">
            <a onclick="shareLink()" class="gradient-btn-full">Share Now</a>
        </div>
    </section>

    <script>
        function shareLink() {
            var linkInput = document.getElementById("linkInput");
            var link = linkInput.value;

            var sharingURL = "{{ route('register', ['referal' => Auth::user()->email]) }}" + encodeURIComponent(link);
            window.open(sharingURL);

            linkInput.select();
            linkInput.setSelectionRange(0, 99999);
            document.execCommand("copy");

            alert("Link copied to clipboard and shared!");
        }
    </script>
@endsection
