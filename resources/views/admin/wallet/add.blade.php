@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row page-titles">
                <h3>Admin Dashboard</h3>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">Edit Wallet</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('Admin.Edit.Wallet.Address', ['id' => $wallet->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="wallet_address" value="{{ $wallet->wallet_address }}"
                                            class="form-control input-default " placeholder="Your Wallet Address">
                                    </div>
                                    <div class="mb-3">
                                        <div class="custom-file d-flex justify-content-center align-items-center pmd-custom-file text-center"
                                            style="width: 100%;height:15vh;border:1px solid black">
                                            <input type="file" name="qr" value="{{ $wallet->qr }}" id="uploadBtn" style="display: none;">
                                            <label for="uploadBtn" class="bg-primary btn btn-primary"
                                                style="border-radius:15px">Upload Qr</label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="{{ asset('images/' . $wallet->qr) }}" alt="qr" height="150px"
                                            width="150px" class="img-fluid img-responsive">
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
