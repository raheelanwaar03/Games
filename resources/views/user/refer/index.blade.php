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
        // Check if Web Share API is supported
        if (navigator.share) {
            const shareButton = document.getElementById('linkInput');
            shareButton.addEventListener('click', shareVideo);
        } else {
            console.log('Web Share API is not supported in this browser.');
        }

        function shareVideo() {
            // Get the video link
            const videoLink = '{{ route('register', ['referal' => Auth::user()->email]) }}'; // Replace with your video link

            // Check if Web Share API is supported
            if (navigator.share) {
                // Use Web Share API to share the video link
                navigator.share({
                        title: 'Invitation link',
                        url: videoLink
                    })
                    .then(() => console.log('link shared successfully.'))
                    .catch((error) => console.log('Error sharing link:', error));
            } else {
                // If Web Share API is not supported, display a prompt with the video link and copy option
                const promptText = `Share this link:\n${videoLink}`;

                // Create a textarea element to hold the video link
                const textarea = document.createElement('textarea');
                textarea.value = videoLink;
                textarea.style.position = 'fixed'; // Ensure the textarea is hidden
                document.body.appendChild(textarea);

                // Select the text within the textarea
                textarea.select();
                textarea.setSelectionRange(0, videoLink.length);

                try {
                    // Copy the video link to the clipboard
                    document.execCommand('copy');
                    console.log('Link copied to clipboard.');
                } catch (error) {
                    console.log('Error copying link:', error);
                }

                // Remove the textarea element from the DOM
                document.body.removeChild(textarea);

                // Show a prompt to inform the user that the video link has been copied
                alert(`${promptText}\n\nLink copied to clipboard.`);
            }
        }
    </script>
@endsection
