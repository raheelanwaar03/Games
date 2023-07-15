@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">User Dashboard</h1>
        @if ($cart != null)
            <a href="{{ route('User.Cart.Items') }}" class="btn btn-primary">Pay Now</a>
        @endif
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row mt-3 py-5">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                @forelse ($games as $game)
                    <div class="col-sm-6 mx-2">
                        <img src="{{ asset('images/' . $game->image) }}" class="img-responsive w-100" alt="image">
                        <div class="d-flex justify-content-end">
                            <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
                                @csrf
                                <div class="float-right">
                                    <button type="submit" class="btn btn-sm btn-outline-primary text-white" style="margin-top:-60px;">Buy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <h3>No Game Added Yet!</h3>
                @endforelse
            </div>
        </div>
    </div>
    {{-- <div class="col-sm-3">
            <div class="image-css">
                <img src="{{ asset('images/' . $game->image) }}" alt="Image" height="150px" width="150px"
                    class="img-responsive">
            </div>
            <div class="">
                <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
                    @csrf
                    <div class="float-right">
                        <button type="submit" class="btn btn-sm btn-primary">Buy</button>
                    </div>
                </form>
            </div>
        </div> --}}
    {{-- <div class="card-footer" style="border-top:1px solid white">
                    <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between align-items-center">
                            <i class="fa fa-minus" onclick="updateQuantity('minus')"></i>
                            <input name="qty" id="{{ $game->title }}" type="number" min="1"
                                style="width: 40px;" value="1">
                            <i class="fa fa-plus" onclick="updateQuantity('plus')"></i>
                        </div>
                    </form>
                </div> --}}
    {{-- <script>
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
                </script> --}}
@endsection
