<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>

    <!-- Preloader section -->
    <div id="preloader">
        <div class="img-container">
            <img class="img-fluid" height="150" width="150" src="{{ asset('assets/img/logo.png') }}"
                alt="">
        </div>
    </div>

    <!-- welcome slider Section -->
    <section class="welcome-slider">
        <header></header>
        <div class="container main-content px-lg-0">
            <div class="pt-4">
                <div class="swiper welcome-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="{{ asset('assets/img5.jpg') }}" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>Invest with us, earn with us!</p>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="{{ asset('assets/img6.jpg') }}" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>With all the information you need, you can start investing and earning. Good Luck!
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="{{ asset('assets/img7.jpg') }}" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>Feel the exuberance and excitement of inviting new friends and earn profit.</p>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="{{ asset('assets/img4.jpg') }}" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>Investe with us and invite more friends to our platform to win exciting prizes!</p>
                            </div>
                        </div>

                    </div>
                    <div class="pagination"></div>
                </div>
                <div class="home-btns pb-3">
                    <a href="{{ route('login') }}">Skip this</a>
                    <a href="{{ route('login') }}" class="gradient-btn">Next</a>
                </div>
            </div>
        </div>
    </section>

    <!-- JS file linkes -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/service-worker-settings.js') }}"></script>
</body>

</html>
