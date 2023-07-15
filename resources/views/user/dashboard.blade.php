@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">User Dashboard</h1>
        @if ($cart != null)
            <a href="{{ route('User.Cart.Items') }}" class="btn btn-primary">Pay Now</a>
        @endif
    </div>
@endsection

<style>
    .container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card {
        flex: 0 0 calc(50% - 20px);
        margin: 10px;
        width: 300px;
        max-width: 100%;
    }
</style>

@section('content')
    <div class="container pb-5">
        @forelse ($games as $game)
            <div class="card bg-transparent" style="border: 1px solid white">
                <img class="card-img-top" src="{{ asset('images/' . $game->image) }}" height="200px" width="200px"
                    alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text text-white">{{ $game->title }} : {{ $game->price }}$</h4>
                    <p class="card-text text-white">Commission: {{ $game->commission }}$</p>
                    <p class="text-white">{{ $game->description }}</p>
                </div>
                <div class="card-footer" style="border-top:1px solid white">
                    <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="fa fa-minus" onclick="updateQuantity('minus')"></i>
                            <input name="qty" id="{{ $game->title }}" type="number" min="1"
                                style="width: 40px;" value="1">
                            <i class="fa fa-plus" onclick="updateQuantity('plus')"></i>
                            <button type="submit" class="btn btn-sm btn-primary">Buy</button>
                        </div>
                    </form>
                </div>
            </div>

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
                }
            </script>

        @empty
            <h3>No Game Added Yet!</h3>
        @endforelse
    </div>
@endsection
