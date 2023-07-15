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
            // Get the input element that contains the link
            var linkInput = document.getElementById('linkInput');

            // Create a temporary textarea element
            var tempTextArea = document.createElement('textarea');
            tempTextArea.value = linkInput.value;

            // Append the textarea to the document
            document.body.appendChild(tempTextArea);

            // Select the text in the textarea
            tempTextArea.select();
            tempTextArea.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text to the clipboard
            document.execCommand('copy');

            // Remove the temporary textarea
            document.body.removeChild(tempTextArea);

            // Share the link on social media
            // Replace the social media URLs with the actual URLs you want to use
            var facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(linkInput.value);
            var twitterUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(linkInput.value);
            var linkedinUrl = 'https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(linkInput.value);

            // Open the social media sharing links in new tabs
            window.open(facebookUrl, '_blank');
            window.open(twitterUrl, '_blank');
            window.open(linkedinUrl, '_blank');
        }
    </script>
@endsection
