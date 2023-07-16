<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 20px;
            background-color: #f5f5f5;
        }

        .header-section {
            position: relative;
            height: 300px;
            background-image: url('{{ asset('assets/invite.jpeg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .header-text {
            font-size: 28px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        .container {
            max-width: 960px;
        }

        .card {
            margin-bottom: 20px;
        }

        .main-text {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header-section">
        <a href="#" onclick="window.history.back()">
            <i class="bi bi-arrow-left text-white"></i>
        </a>
        <div class="header-text">
            <h1>Welcome to our Help Page</h1>
            <p>Find answers to your frequently asked questions below.</p>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center my-3">Popular articles</h2>
        <div class="jumbotron">
            <div class="">
                <p>Getting started > Create an account</p>
            </div>

            <a href="{{ route('register') }}">
                <h3>Creating an account</h3>
            </a>
        </div>

        <div class="jumbotron">
            <div class="">
                <p>Getting started > For You</p>
            </div>
            <a href="#">
                <h3>For You</h3>
            </a>
        </div>

        <div class="jumbotron">
            <div class="">
                <p>Getting started > Setting Up Your profile</p>
            </div>
            <a href="#">
                <h3>Setting Up Your profile</h3>
            </a>
        </div>

        <div class="jumbotron">
            <div class="">
                <p>Getting started > Authenticate</p>
            </div>
            <a href="#">
                <h3>Login </h3>
            </a>
            <a href="#">
                <h3>Reset Password </h3>
            </a>
        </div>

        <div class="jumbotron">
            <div class="">
                <p>Report a problem</p>
            </div>
            <a href="#">
                <h3>Account and privacy setting </h3>
            </a>
        </div>

        <div class="jumbotron">
            <div class="">
                <p>Account information</p>
            </div>
            <a href="#">
                <h3>Account privacy settings</h3>
            </a>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZx2XRvoKMEq0bod04pPzGX5iQ4aFvhFVX9oAKSoN6gep0J1NWuUgWJ45ZfprV3" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.card-header button').click(function() {
                $(this).closest('.card-header').next('.card-body').find('.main-text').toggle();
            });
        });
    </script>
</body>

</html>
