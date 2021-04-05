@extends('admin.layouts.master')

@section('page')
    Users
@endsection

@section('content')
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
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    <button class="btn btn-success ti-settings" title="Edit User"> Edit</button>
                                    <button class="btn btn-success ti-close" title="Delete User"> Delete</button>                                    
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