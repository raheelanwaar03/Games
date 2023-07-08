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
                            <h4 class="card-title text-center">Add Task</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('Admin.Update.User',['id'=>$user->id]) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" value="{{ $user->name }}"
                                            class="form-control input-default " readonly>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" value="{{ $user->email }}"
                                            class="form-control input-default " readonly>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="balance" value="{{ $user->balance }}"
                                            class="form-control input-rounded">
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Add</button>
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
