@extends('front.layouts.master')

@section('content')

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
        @foreach($profdata as $i => $pdata)
            <img  height = "100px" src="{{ url('/uploads/') . '/' . $pdata->image }}" alt="Profile image here" >
        @endforeach
        
            <div class="pull right">
                <a href="/front/updateprofile" class="pull-right"><i class="fa fa-cogs"></i> Update Profile</a>
                
            </div>
        </div>
            <div class="u-ml16 u-truncate">
            
                <p class="u-t2 u-truncate">{{$user->name}}</p>
                <p class="u-truncate">{{$user->email}}</p>
            
            </div>
            <div>
            <a href="" class=" ti-archive"><i class="fa fa-archive"></i> My Ads</a>
            </div>
            
        </div>
@endsection