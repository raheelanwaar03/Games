@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Free Games</h1>
    </div>
@endsection

@section('content')
    <section class="pb-5">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center mt-3">
                    <div class="card" style="width: 18rem;">
                        <iframe class="card-img-top" width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                        <div class="card-body">
                            <h4 class="card-text text-black">test video</h4>
                            <p class="text-black">test description</p>
                        </div>
                    </div>
                </div>
                @empty
                    <h3>No Game Added Yet</h3>
                    @endforelse
                </div>
            </div>
            </div>
        </section>
    @endsection
