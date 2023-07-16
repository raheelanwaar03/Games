@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Free Games</h1>
    </div>
@endsection

@section('content')
    <div class="container mb-5">
        <div class="row mt-3 pb-5">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-5 mx-2">

                    <video width="320" height="240" controls class="w-100 img-responsive">
                        <source src="{{ asset('assets/V⁯ideo/VID-20230715-WA0105.mp4') }}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <div class="col-sm-5 mx-2">
                    <video width="320" height="240" controls class="w-100 img-responsive">
                        <source src="{{ asset('assets/V⁯ideo/VID-20230715-WA0106.mp4') }}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-5 mx-2">
                    <video width="320" height="240" controls class="w-100 img-responsive">
                        <source src="{{ asset('assets/V⁯ideo/VID-20230715-WA0107.mp4') }}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <div class="col-sm-5 mx-2">
                    <video width="320" height="240" controls class="w-100 img-responsive">
                        <source src="{{ asset('assets/V⁯ideo/VID-20230715-WA0108.mp4') }}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="col-sm-5 mx-2">
                    <video width="320" height="240" controls class="w-100 img-responsive">
                        <source src="{{ asset('assets/V⁯ideo/VID-20230715-WA0110.mp4') }}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
        </div>
    </div>
@endsection
