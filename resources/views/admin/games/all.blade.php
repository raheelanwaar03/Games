@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Games</h4>
                            <a href="{{ route('Admin.Add.Game') }}" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Commission</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($games as $game)
                                            <tr>
                                                <td>{{ $game->title }}</td>
                                                <td>{{ $game->price }}</td>
                                                <td>{{ $game->description }}</td>
                                                <td>{{ $game->commission }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $game->image) }}" alt="Image"
                                                        class="img-responsive" height="60px" width="60px">
                                                </td>
                                                <td>{{ $game->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Delete.Game', ['id' => $game->id]) }}"
                                                        class="btn btn-sm btn-danger">Del</a>
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
