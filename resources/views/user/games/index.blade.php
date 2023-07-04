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
                                        <input type="number" value="1" min="1" style="width: 40px;">
                                        <button class="btn btn-primary">Add
                                            To
                                            Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        </div>
    </section>
@endsection
