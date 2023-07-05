@extends('user.layout.app')

@section('content')
    <section class="pb-5">
        <div class="container pb-5">
            <div class="row justify-content-center">
                @forelse ($games as $game)
                    <div class="col-md-4 text-center mt-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('images/' . $game->image) }}" height="290px" width="400px"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-text text-black">{{ $game->title }}</h4>
                                <p class="text-black">{{ $game->description }}</p>
                            </div>
                            <div class="card-footer">
                                <form action="{{ route('User.Cart', ['id' => $game->id]) }}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-between align-items-center">
                                        <input type="number" name="qty" value="1" min="1" style="width: 40px;">
                                        <button type="submit" class="btn btn-primary">Add
                                            To
                                            Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                <h3>No Game Added Yet!</h3>
                @endforelse
            </div>
        </div>
        </div>
    </section>
@endsection




















{{-- <section class="pb-5">
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 text-center mt-3">
                <a href="#">
                    <div class="card bg-transparent" style="height:150px;border:1px solid blueviolet">
                        <div class="card-body">
                            <h4>Available Balance</h4>
                            <p class="card-text text-white">$10</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 text-center mt-3">
                <a href="#">
                    <div class="card bg-transparent" style="height:150px;border:1px solid blueviolet">
                        <div class="card-body">
                            <h4>Personal Balance</h4>
                            <p class="card-text text-white">$10</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 text-center mt-3">
                <a href="#">
                    <div class="card bg-transparent" style="height:150px;border:1px solid blueviolet">
                        <div class="card-body">
                            <h4>Total Referal Bonus</h4>
                            <p class="card-text text-white">$10</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 text-center mt-3">
                <a href="#">
                    <div class="card bg-transparent" style="height:150px;border:1px solid blueviolet">
                        <div class="card-body">
                            <h4>Total Withdraw</h4>
                            <p class="card-text text-white">$10</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
</section> --}}
