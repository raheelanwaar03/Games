@extends('user.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Fund Password</h4>
                    <a href="{{ route('User.Fund.Password') }}" class="btn btn-outline-danger">Modify Password</a>
                </div>
                <hr color="white">
            </div>
            <div class="col-md-12 mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Login Password</h4>
                    <a href="{{ route('User.Setting') }}" class="btn btn-outline-primary">Change Password</a>
                </div>
                <hr color="white">
            </div>
            <div class="col-md-12 mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Wallet Address</h4>
                    <a href="{{ route('User.Change.Wallet.Address') }}" class="btn btn-outline-success">Update Wallet Address</a>
                </div>
                <hr color="white">
            </div>
        </div>
    </div>

@endsection
