<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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
            <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-left text-white"
                    style="color:blue"></i> back</button>
        </a>
        <div class="header-text">
            <h1>Buy games to earn daily profit</h1>
        </div>
    </div>

    <div class="container" style="margin-top: -20px">
        <div class="row">
            <div class="col-sm-12 d-flex jusitfy-content-around align-items-center">
                <div class="col-sm-3">
                    <div
                        style="background-color:#ffffff;color:rgb(106, 94, 218);padding:10px;width:150px;border-radius:19px;position:fixed">
                        <p class="text-center">Price: ${{ $game->price }}</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div
                        style="background-color:#ffffff;color:rgb(106, 94, 218);padding:10px;width:150px;border-radius:19px;position:fixed">
                        <p class="text-center">Quantity: 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between align-items-center">
                <div class="col-sm-2">
                    <h4 style="color:rgb(102, 100, 100);font-size:small;">Image</h4>
                </div>
                <div class="col-sm-8">
                    <img src="{{ asset('images/' . $game->image) }}" class="img-fluid img-responsive"
                        style="width: 200px;height:150px" />
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between align-items-center">
                <div class="col-sm-2">
                    <h4 style="color:rgb(102, 100, 100);font-size:small;">Purchase Quantity</h4>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fa fa-minus" style="color: black;" onclick="updateQuantity('minus')"></i>
                        <input name="qty" id="{{ $game->title }}" type="number" min="1" class="mx-3"
                            style="width: 40px;border:none;" value="1">
                        <i class="fa fa-plus" style="color: black;" onclick="updateQuantity('plus')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between align-items-center">
                <div class="col-sm-2">
                    <h4 style="color:rgb(102, 100, 100);font-size:small;">Purchase Quantity</h4>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fa fa-minus" style="color: black;" onclick="updateQuantity('minus')"></i>
                        <input name="qty" id="{{ $game->title }}" type="number" min="1" class="mx-3"
                            style="width: 40px;border:none;" value="1">
                        <i class="fa fa-plus" style="color: black;" onclick="updateQuantity('plus')"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>






    {{-- <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('images/' . $game->image) }}" class="img-fluid img-responsive"
                            style="width: 200px;height:150px" />
                    </div>
                    <p class="text-blue text-center">Detail : {{ $game->description }}</p>
                    <p class="text-center mb-2" id="price">Price : ${{ $game->price }}</p>
                    <h2 class="text-center">Name : {{ $game->title }}</h2>
                    <p class="text-center mb-2">commission : ${{ $game->commission }}</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fa fa-minus" onclick="updateQuantity('minus')"></i>
                        <input name="qty" id="{{ $game->title }}" type="number" min="1" class="mx-3" style="width: 40px;"
                            value="1">
                        <i class="fa fa-plus" onclick="updateQuantity('plus')"></i>
                    </div>
                    <button type="submit" class="gradient-btn-full">Pay Now</button>
                </form> --}}







    <footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-KyZx2XRvoKMEq0bod04pPzGX5iQ4aFvhFVX9oAKSoN6gep0J1NWuUgWJ45ZfprV3" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function updateQuantity(operation) {
                var quantityElement = document.getElementById('{{ $game->title }}');
                var quantity = parseInt(quantityElement.value);

                // Increase or decrease the quantity based on the operation
                if (operation === 'plus') {
                    quantity += 1;
                } else if (operation === 'minus') {
                    if (quantity > 1) {
                        quantity -= 1;
                    }
                }

                // Update the quantity input field
                quantityElement.value = quantity;

                // multiply qty with price
                var newPrice = price * quantity;
                priceElement.textContent = newPrice.toFixed(2);

            }
        </script>
    </footer>
</body>

</html>
