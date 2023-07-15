@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">User Dashboard</h1>
        @if ($cart != null)
            <a href="{{ route('User.Cart.Payment') }}" class="btn btn-primary">Pay Now</a>
        @endif
    </div>
@endsection

@section('content')
    <section class="matchboard position-relative">
        <ul class="nav nav-pills d-flex justify-content-around align-items-center" style="flex-wrap: wrap;" id="pills-tab"
            role="tablist">
            <a href="{{ route('User.Deposit.Amount') }}">
                <li class="nav-item" style="flex: 0 0 calc(15% - 10px);" role="presentation">
                    <button class="nav-link active"><i class="bi bi-circle-fill live"></i>
                        Recharge</button>
                </li>
            </a>
            <a href="{{ route('User.Widthraw') }}">
                <li class="nav-item" style="flex: 0 0 calc(15% - 10px);" role="presentation">
                    <button class="nav-link active"><i class="bi bi-circle-fill live"></i> Widthraw</button>
                </li>
            </a>
            <a href="#">
                <li class="nav-item" style="flex: 0 0 calc(15% - 10px);" role="presentation">
                    <button class="nav-link active"><i class="bi bi-circle-fill live"></i> Help</button>
                </li>
            </a>
        </ul>
    </section>

    <div class="container">
        <div class="row mt-3 pb-5">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                @forelse ($games as $game)
                    <div class="col-sm-5 mx-2">
                        <img src="{{ asset('images/' . $game->image) }}" class="img-responsive w-100" height="250px"
                            width="250px" alt="image">
                        <div class="d-flex justify-content-end">
                            <div class="float-right">
                                <a href="{{ route('User.Show.Details', ['id' => $game->id]) }}"
                                    class="btn btn-sm btn-primary text-white" style="margin-top:-60px;">Buy</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>No Game Added Yet!</h3>
                @endforelse
            </div>
        </div>
    </div>
@endsection
