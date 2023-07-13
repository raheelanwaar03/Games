@extends('user.layout.app')

@section('cart')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="fw-500 mb-3">Account Report</h1>
    </div>
@endsection

@section('content')
    <section class="matchboard mx-3 position-relative">
        <ul class="nav nav-pills my-3 d-flex justify-content-between" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#widthraw"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i
                        class="bi bi-circle-fill live"></i>
                    widthraw</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#daily profit"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i
                        class="bi bi-circle-fill live"></i> Daily Profit</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#rebate"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i
                        class="bi bi-circle-fill live"></i> Rebate</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#deposit"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i
                        class="bi bi-circle-fill live"></i>
                    Deposit</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @forelse ($user_transcations as $transcation)
                <div class="tab-pane fade show active" id="{{ $transcation->type }}" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">
                    <a href="#" class="match-card mb-3">
                        <div class="card-inner">
                            <div class="d-flex flex-column gap-2">
                                <h3>{{ $transcation->amount }}</h3>
                            </div>
                            <div>
                                <p class="text-center mb-0">{{ $transcation->status }}</p>
                            </div>
                            <div class="d-flex flex-column gap-2 small">
                                <h6>{{ $transcation->created_at }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <h5>You have not perform any transcation yet</h5>
            @endforelse
        </div>
    </section>
@endsection
