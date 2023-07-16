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
            background-image: url('{{ asset('assets/blur.jpg') }}');
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
        <div class="header-text">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                    <div class="col-sm-6">
                        <p>{{ yesterdayTeamProfit() }}</p>
                        <p style="font-size: 12px;">Yesterday team Income</p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ totalTeamIncome() }}</p>
                        <p style="font-size: 12px;">Cumulative team commission</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                    <div class="col-sm-6">
                        <p>{{ todayUsers() }}</p>
                        <p style="font-size: 12px;">Active count today</p>
                    </div>
                    <div class="col-sm-6">
                        <p>{{ todayReferals() }}</p>
                        <p style="font-size: 12px;">Added people</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-12">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Account</th>
                                <th scope="col">Registeration Time</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->balance }}</td>
                                    <td>yes</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
