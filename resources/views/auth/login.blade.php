<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/swiper.css" />
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <div id="preloader">
        <div class="img-container">
            <img class="img-fluid" height="150" width="150" src="{{ asset('assets/img/log-bg.png') }}" alt="">
        </div>
    </div>
    <x-alert/>
    <!-- welcome slider Section -->
    <div class="login-email">
        <div class="top-bg">

        </div>
        <div class="login-card">
            <div class="login-logo">
                <img class="img-fluid logo" src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
            <form action="{{ route('login') }}" method='POST'>
                @csrf
                <div class="input-box">
                    <img src="{{ asset('assets/img/email.png') }}" height="15" width="20" alt="">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-box">
                    <img src="{{ asset('assets/img/lock.png') }}" height="18" width="14" alt="">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <label class="mb-3">
                    <input type="checkbox" name="remember" checked="checked">
                    Keep me login
                </label>
                <button class="gradient-btn-full">Login</button>
            </form>
            <p class="text-center mt-2">Already have an account? <a href="{{ route('register') }}"
                    class="text-blue">Register</a></p>
        </div>
    </div>
    <!-- JS file links -->
    <script src="assets/js/main.js"></script>
</body>

</html>
