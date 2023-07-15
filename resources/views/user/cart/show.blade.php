@extends('auth.layout.app')

@section('content')
    <section class="login-email">
        <div class="top-bg"></div>
        <div class="login-card py-5">
            <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
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
                    <input name="qty" id="{{ $game->title }}" type="number" min="1" class="mx-3"
                        style="width: 40px;" value="1">
                    <i class="fa fa-plus" onclick="updateQuantity('plus')"></i>
                </div>
                <button type="submit" class="gradient-btn-full">Pay Now</button>
            </form>
        </div>
    </section>

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
@endsection
