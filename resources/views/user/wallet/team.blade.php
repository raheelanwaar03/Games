@extends('user.layout.app')

@section('content')
    <section class="matchboard mx-3 position-relative">
        <div class="d-flex justify-content-between align-items-center mt-3 mb-2">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
            <p class="mb-0">All Team Members</p>
            <span>
            </span>
        </div>
        @foreach ($users as $user)
            <div class="d-flex gap-2 py-3 justify-content-between align-items-start">
                <div class="d-flex gap-3 align-items-start">
                    <div>
                        <h3>{{ $user->name }}</h3>
                        <span class="dark-text">{{ $user->created_at }}</span>
                    </div>
                </div>
                <h2 class="text-blue">${{ $user->balance }}</h2>
            </div>
        @endforeach

    </section>
@endsection
