@extends('admin.layouts.master')

@section('page')
    Users
@endsection

@section('content')
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif
<!-- User page -->
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Users</h4>
                    <p class="category">List of all registered users</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profile Photo</th>
                            <th>Contact Number</th>
                            <th>Location</th>
                            <th>Registered at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)

                            <tr>

                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><img  height = "100px" src="{{ url('/uploads/') . '/' . $user->image }}" alt="Profile image here" ></td>
                                <td>{{ $user->contact_no }}</td>
                                <td>{{ $user->location }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-success ti-settings" href="/admin/users/edituser/{{$user->id}}" title="Edit User" > Edit</a>
                                    <a class="btn btn-danger ti-close" href="/admin/users/deleteuser/{{$user->id}}" title="Delete User" onclick="return confirm('Are you sure? You will not be able to recover this.')" > Delete</a>                                  
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection