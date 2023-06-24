<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/swiper.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="manifest" href="manifest.json">
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
                                <img src="assets/img/slide1.png" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>Invest with us, earn with us!</p>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="assets/img/slide2.png" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>With allthe information you need, you can start playing and winning. Good Luck!
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="assets/img/slide3.png" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>Feel the exuberance and excitement of playing to win in this gaming environment right
                                    through your
                                    mobile devices</p>
                            </div>
                        </div>
                        <div class="swiper-slide d-flex justify-content-center">
                            <div class="box">
                                <img src="assets/img/slide4.png" class="img-fluid" alt="">
                                <h1 class="mt-5">{{ env('APP_NAME') }}</h1>
                                <p>Ready to challenge players from all over the world in the ultimate betting contest?
                                    Bet for FREE
                                    Sports and eSports and compete for 12 MILLION Bether in prizes!</p>
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
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/service-worker-settings.js"></script>
</body>

</html>
