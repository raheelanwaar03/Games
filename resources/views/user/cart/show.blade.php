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
            background-image: url('{{ asset('assets/images (96).jpeg') }}');
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
            <button type="submit" class="btn btn-sm btn-primary text-center"><i class="bi bi-arrow-left text-white"
                    style="color:blue"></i></button>
        </a>
        <div class="header-text">
            <h1>Buy games to earn daily profit</h1>
        </div>
    </div>

    <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
        @csrf

        <div class="container" style="margin-top: -20px">
            <div class="row">
                <div class="col-sm-12 d-flex jusitfy-content-around align-items-center">
                    <div class="col-sm-3">
                        <div
                            style="background-color:#ffffff;color:rgb(106, 94, 218);padding:10px;width:150px;border-radius:19px;position:top;">
                            <p style="margin-top:8px;" class="text-center">Price: ${{ $game->price }}</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div
                            style="background-color:#ffffff;color:rgb(106, 94, 218);padding:10px;width:150px;border-radius:19px;position:top;">
                            <p style="margin-top:8px;" class="text-center">Quantity: 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" style="margin-top:100px">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                    <div class="col-sm-2">
                        <h4 style="color:rgb(102, 100, 100);font-size:small;">{{ $game->title }}</h4>
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
                            <i class="fa fa-minus" style="color: black;" onclick="decreaseQuantity()"></i>
                            <input name="qty" id="quantity" type="number" min="1" oninput="updatePrice()"
                                class="mx-3" style="width: 40px;border:none;text-decoration:none;" value="1">
                            <i class="fa fa-plus" style="color: black;" onclick="increaseQuantity()"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-4" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center"
                    style="background-color: white;border-radius:30px;">
                    <h4 style="color:rgb(102, 100, 100);font-size:small;margin-top:9px;">Total Price</h4>
                    <p style="margin-top:9px;" id="price">{{ $game->price }}</p>
                </div>
            </div>
        </div>

        <div class="container px-4" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center"
                    style="background-color: white;border-radius:30px;">
                    <h4 style="color:rgb(102, 100, 100);font-size:small;margin-top:9px;">Estimatated Profit</h4>

                    <p style="margin-top:9px;" id="sd">%{{ $game->commission }}</p>
                </div>
            </div>
        </div>
        <div class="my-3 px-3">
            <button type="submit" class="btn btn-block btn-primary">Confirm Purchase</button>
        </div>

    </form>

    <footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-KyZx2XRvoKMEq0bod04pPzGX5iQ4aFvhFVX9oAKSoN6gep0J1NWuUgWJ45ZfprV3" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </footer>

    <script>
        function updatePrice() {
            // Get the quantity input and price element
            var quantityInput = document.getElementById('quantity');
            var priceElement = document.getElementById('price');
            var commissionElement = document.getElementById('commission');

            // Get the quantity value and convert it to a number
            var quantity = parseInt(quantityInput.value);

            // Update the price based on the quantity

            var commission = {{$game->commission}};

            var price = {{ $game->price }}; // Assuming initial price is $10.00
            var totalPrice = (price * quantity).toFixed(2); // Calculate total price with 2 decimal places

            // Update the price element with the new total price
            priceElement.textContent = totalPrice;

            // calculating total commission

            var totalCommission = (commission * quantity).toFixed(2);
            // update the commission
            commissionElement.textContent = totalCommission;

        }

        function increaseQuantity() {
            // Get the quantity input element
            var quantityInput = document.getElementById('quantity');

            // Increase the quantity value by 1
            quantityInput.value = parseInt(quantityInput.value) + 1;

            // Update the price
            updatePrice();
        }

        function decreaseQuantity() {
            // Get the quantity input element
            var quantityInput = document.getElementById('quantity');

            // Decrease the quantity value by 1, but not below 1
            var quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }

            // Update the price
            updatePrice();
        }
    </script>

</body>

</html>
