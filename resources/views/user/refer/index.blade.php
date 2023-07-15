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
                value="{{ route('register', ['referal' => Auth::user()->email]) }}" id="myInput" readonly>
        </div>
        <div class="btns mt-4 d-flex justify-content-center gap-4">
            <a onclick="copy()" class="gradient-btn-full">Copy Invitation</a>
        </div>
    </section>


    <script>
        function copy() {
            // Get the current URL
            var url = window.location.href;

            // Create an input element to hold the URL
            var inputElement = document.createElement('myInput');
            inputElement.setAttribute('value', url);
            document.body.appendChild(inputElement);

            // Select the URL in the input element
            inputElement.select();
            inputElement.setSelectionRange(0, 99999); // For mobile devices

            // Copy the URL to the clipboard
            document.execCommand('copy');

            // Remove the input element from the document
            document.body.removeChild(inputElement);

            // Display a success message
            alert('Link copied to clipboard!');
        }
    </script>
@endsection
