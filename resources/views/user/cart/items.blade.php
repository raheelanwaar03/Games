@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Your Selected Games</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-white">
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Total Price</th>
                                <th>Commission</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @forelse ($cart as $item)
                                <tr class="text-white">
                                    <td class="text-white">{{ $item->name }}</td>
                                    <td class="text-white">${{ $item->price }}</td>
                                    <td class="text-white">{{ $item->qty }}</td>
                                    <td class="text-white">
                                        <img src="{{ asset('images/' . $item->image) }}" alt="Image" height="80px"
                                            width="80px" class="image-responsive img-thumbnail">
                                    </td>
                                    <td class="text-white">${{ $item->total_price }}</td>
                                    <td class="text-white">${{ $item->commission }}</td>
                                    <td class="text-white">{{ $item->created_at }}</td>
                                </tr>
                            @empty
                                <h4>You have not added any game in cart</h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-transparent" style="border: 1px solid white">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            Total price for these Games : ${{ totalPrice() }}

                            <br>

                            Your daily Commission will be : ${{ totalCommission() }}

                        </div>
                        <div class="">
                            <a href="{{ route('User.Cart.Payment') }}" class="btn btn-sm btn-primary">Pay Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
