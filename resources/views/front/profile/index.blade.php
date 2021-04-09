@extends('front.layouts.master')

@section('content')
<hr>
    <h2>Profile</h2>
    <hr>

    <h3>User Details</h3>

    <!-- <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2">User Details <a href="" class="pull-right"><i class="fa fa-cogs"></i> Edit user</a></th>
        </tr>
        </thead>
        <tr>
            <th>Name</th>
            <td>{{ $user->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Registered At</th>
            <td>{{ $user->created_at}}</td>
        </tr>
    </table> -->
    <div class="flex-align">
        <div class="rounded-circle ">
        
            <img  height = "100px" src="{{ url('/uploads/') . '/' . $user->image }}" alt="Profile image here" >
        
        
            <div class="pull right">
                <a href="/front/profile/updateprofile/{{$user->id}}" title="Update your profile" class="btn btn-success pull-right"><i class="fa fa-cogs"></i> Update Profile</a>
                <br/><br/><a href="/front/profile/changepw/{{$user->id}}" title="Password update" class="btn btn-success pull-right"><i class="fa fa-key"></i> Change Password</a>
                <br/><br/><a href="/front/profile/deleteuser/{{$user->id}}" title="Delete your profile" class="btn btn-danger pull-right" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-user-times"></i> Deactivate Account</a>
            </div>
        </div>
            <div class="u-ml16 u-truncate">
            
                <p class="u-t2 u-truncate">{{$user->name}}</p>
                <p class="u-truncate">{{$user->email}}</p>
                <p class="u-truncate">{{$user->contact_no}}</p>
            
            </div>
            <div>
            <a href="/front/profile/myad/{{$user->id}}" class=" ti-archive"><i class="fa fa-archive"></i> My Ads</a>
            </div>
            
        </div>
@endsection