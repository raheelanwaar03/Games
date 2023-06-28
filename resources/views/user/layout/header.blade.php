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
    <link rel="stylesheet"
        href="{{ asset('../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.5/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <div id="preloader">
        <div class="img-container">
            <img class="img-fluid" height="150" width="150" src="{{asset('assets/img/logo.png')}}" alt="">
        </div>
    </div>
    <!-- welcome slider Section -->
    <section class="matchboard mx-3 position-relative">
        <div class="bottom-navigation">
            <a href="matchboard.html" class="single-nav active">
                <i class="bi bi-trophy"></i>
                <span>Home</span>
            </a>
            <a href="sports.html" class="single-nav">
                <i class="bi bi-dribbble"></i>
                <span>Income</span>
            </a>
            <a href="mybets.html" class="single-nav">
                <i class="bi bi-play-circle"></i>
                <span>Task</span>
            </a>
            <a href="news.html" class="single-nav">
                <i class="bi bi-globe-americas"></i>
                <span>Finance</span>
            </a>
            <a href="statistics.html" class="single-nav">
                <i class="bi bi-globe"></i>
                <span>Mine</span>
            </a>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-3 mb-2 gap-2">
            <a href="deposit.html">
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
                                <img src="{{ asset('assets/img/profile.png') }}" width="55" height="55" alt="">
                                <div>
                                    <h4 class="text-white mb-0">Peter Moses</h4>
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
                                    <a class="gradient-btn py-2 px-3 fs-6 fw-normal" href="deposit.html">Deposit</a>
                                    <a class="outline-btn-small fs-6" href="withdraw.html">Withdraw</a>
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
                        <a href="invite.html" class="profile-row mt-3">
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
        <h1 class="fw-500 mb-3">User Dashboard</h1>
    </section>
