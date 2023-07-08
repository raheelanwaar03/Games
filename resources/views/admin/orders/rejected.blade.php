@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Rejected Games</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Commission</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($games as $game)
                                            <tr>
                                                <td>{{ $game->name }}</td>
                                                <td>{{ $game->price }}</td>
                                                <td>{{ $game->commission }}</td>
                                                <td>{{ $game->qty }}</td>
                                                <td>{{ $game->total_price }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $game->trx_image) }}" alt="Image"
                                                        class="img-responsive" height="60px" width="60px">
                                                </td>
                                                <td>{{ $game->status }}</td>
                                                <td>{{ $game->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Make.Order.Approved', ['id' => $game->id]) }}"
                                                        class="btn btn-sm btn-success">Approved</a>
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
