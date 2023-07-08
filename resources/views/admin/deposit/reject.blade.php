@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Rejeceted Deposit</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Amount</th>
                                            <th>Trx ID</th>
                                            <th>Screen Shot</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deposits as $deposit)
                                            <tr>
                                                <td>{{ $deposit->user_name }}</td>
                                                <td>{{ $deposit->amount }}</td>
                                                <td>{{ $deposit->trx_id }}</td>
                                                <td>{{ $deposit->status }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $deposit->screen_shot) }}"
                                                        alt="Screen Shot" width="80px" height="80px"
                                                        class="img-responsive img-thumbnail">
                                                </td>
                                                <td>{{ $deposit->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Make.Approve', ['id' => $deposit->id]) }}"
                                                        class="btn btn-sm btn-success">Approve</a>
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
