@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Approved Widthraws</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Wallet Address</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($widthrawals as $widthraw)
                                            <tr>
                                                <td>{{ $widthraw->user_name }}</td>
                                                <td>{{ $widthraw->amount }}</td>
                                                <td>{{ $widthraw->wallet_address }}</td>
                                                <td>{{ $widthraw->status }}</td>
                                                <td>{{ $widthraw->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Make.Reject', ['id' => $widthraw->id]) }}"
                                                        class="btn btn-danger">Rejectd</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
