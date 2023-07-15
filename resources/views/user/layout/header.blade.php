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


    <style>

        /* Style the input field */
        .input-field {
            display: inline-block;
            position: relative;
        }

        /* Style the button-like options */
        .input-field input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .input-field input[type="text"]:focus {
            outline: none;
        }

        /* Style the buttons within the datalist */
        .input-field datalist {
            position: absolute;
            top: 100%;
            left: 0;
            margin: 0;
            padding: 0;
            list-style-type: none;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
            display: none;
        }

        .input-field datalist option {
            display: block;
            padding: 10px;
            cursor: pointer;
        }

        .input-field input[type="text"]:focus+datalist {
            display: block;
        }
    </style>

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
                <span>Income</span>
            </a>
            <a href="{{ route('User.Games') }}" class="single-nav">
                <i class="bi bi-play-circle"></i>
                <span>Games</span>
            </a>
            <a href="{{ route('User.Setting.Links') }}" class="single-nav">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                class="single-nav">
                <i class="bi bi-wallet2"></i>
                <span>Wallet</span>
            </a>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-3 mb-2 gap-2">
            <a href="{{ route('User.Deposit.Amount') }}">
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
                            <a href="{{ route('User.Setting') }}">
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
                                    <p class="mb-1">Avalibale Balance</p>
                                    <h3>${{ auth()->user()->balance }}</h3>
                                </div>
                                <div>
                                    <p>Income</p>
                                    <h3>${{ totalIncome() }}</h3>
                                </div>
                            </div>
                            <div class="card-bottom">
                                <div class="d-flex gap-4 align-items-center">
                                    <a class="gradient-btn py-2 px-3 fs-6 fw-normal"
                                        href="{{ route('User.Deposit.Amount') }}">Recharge</a>
                                    <a class="outline-btn-small fs-6" href="{{ route('User.Widthraw') }}">Withdraw</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('User.Referals') }}" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/exchange.png') }}" alt="">
                                <p class="fw-500 mb-0">Team's Income</p>
                            </div>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="{{ route('User.Account.Report') }}" class="profile-row mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('assets/img/setpassword.png') }}" alt="">
                                <p class="fw-500 mb-0">Account Report</p>
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
