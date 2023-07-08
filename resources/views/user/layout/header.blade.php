<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>{{ env('APP_NAME') }}</title>
    {{-- font awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<body>
    <div id="preloader">
        <div class="img-container">
            <img class="img-fluid" height="150" width="150" src="{{ asset('assets/img/logo.png') }}"
                alt="">
        </div>
    </div>
    <!-- welcome slider Section -->
    <section class="matchboard mx-3 position-relative">
        <div class="bottom-navigation">
            <a href="{{ route('User.Dashboard') }}" class="single-nav">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
            <a href="{{ route('User.See.All.Transcations') }}" class="single-nav">
                <i class="bi bi-cash"></i>
                <span>Transcations</span>
            </a>
            <a href="{{ route('User.Games') }}" class="single-nav">
                <i class="bi bi-play-circle"></i>
                <span>Games</span>
            </a>
            <a href="#" class="single-nav">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
            <a href="{{ route('User.Add.Wallet') }}" class="single-nav">
                <i class="bi bi-wallet2"></i>
                <span>Wallet</span>
            </a>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-3 mb-2 gap-2">
            <a href="{{ route('User.Deposit') }}">
                <img src="{{ asset('assets/img/plus.png') }}" width="25" alt="">
            </a>
            <h6 class="mb-0">${{ auth()->user()->balance }}</h6>

            <div class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight">
                <img src="{{ asset('assets/img/profile.png') }}" width="35" alt="">
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div>
                    <section class="profile px-3">
                        <div class="d-flex justify-content-between align-items-center py-4">
                            <a href="#" data-bs-dismiss="offcanvas">
                                <i class="bi bi-arrow-left text-white"></i>
                            </a>
                            <p class="mb-0 text-white">Profile</p>
                            <a href="edit-profile.html">
                                <i class="bi bi-pencil-square text-white"></i>
                            </a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pb-3">
                            <div class="d-flex gap-2">
                                <img src="{{ asset('assets/img/profile.png') }}" width="55" height="55"
                                    alt="">
                                <div>
                                    <h4 class="text-white mb-0">{{ auth()->user()->name }}</h4>
                                    <span class="text-white">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="outline-btn py-1 px-4">Logout</button>
                            </form>
                        </div>
                        <div class="follow pb-3">
                            <div>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="profile-card">
                            <div class="card-top d-flex justify-content-between">
                                <div>
                                    <p class="mb-1">My Balance</p>
                                    <h3>${{ auth()->user()->balance }}</h3>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a class="gradient-btn py-2 px-3 fs-6 fw-normal"
                                        href="{{ route('User.Deposit') }}">Recharge</a>
                                    <a class="outline-btn-small fs-6" href="{{ route('User.Widthraw') }}">Withdraw</a>
                                </div>
                            </div>
                            <div class="card-bottom">
                            </div>
                        </div>
                        <div class="profile-card mt-4">
                            <div class="card-top d-flex justify-content-between">
                                <div>
                                    <p class="mb-1">Membership Level</p>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a class="gradient-btn py-2 px-3 fs-6 fw-normal" href="#">More</a>
                                </div>
                            </div>
                        </div>
                        <a href="mybets.html" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/exchange.png') }}" alt="">
                                <p class="fw-500 mb-0">Team's Income</p>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="messages.html" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/setpassword.png') }}" alt="">
                                <p class="fw-500 mb-0">Account Change Report</p>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="messages.html" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/setpassword.png') }}" alt="">
                                <p class="fw-500 mb-0">Customer Support</p>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="{{ route('User.Refer.Friend') }}" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/invite-icon.png') }}" alt="">
                                <p class="fw-500 mb-0">Invite Friends</p>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="#" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/feedback.png') }}" alt="">
                                <p class="fw-500 mb-0">User Agreement</p>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>
        @yield('cart')
    </section>
