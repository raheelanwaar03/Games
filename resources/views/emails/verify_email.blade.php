<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>Verifing Email</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Enter One Time Password(OTP) for Your email verification.</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            Your one time verification password is ** {{ $otp->otp }} ** .You have 90 sec to use it.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            Thanks for joining {{ env('APP_NAME') }}.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>
        Verify your email using 5 digits code.
    </h1>

    <h3>{{ $otp->otp }}</h3>

</body>

</html>
