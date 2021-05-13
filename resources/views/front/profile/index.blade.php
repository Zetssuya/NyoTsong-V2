@extends('front.layouts.master')
<link href="{{ asset('/css/userprofileindex.css') }}" rel="stylesheet">
@section('content')
{{-- SVG Image --}}
<style>
    body {
      background-image: 
      url('/assets/img/profile_wave.svg'), 
      url('/assets/img/profile_wave1.svg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size:
      23%, 
      5%;
      background-position:
      right,
      left;
    }
    </style>
    <br>
{{-- End of SVG Image --}}
{{-- User Profile --}}
<div class="container mt-6 d-flex justify-content-center" >
    <div class="card p-4 mt-3 shadow-custom" style="background-color:rgb(255, 255, 255) !important">
        <div class="first">
            <h6 class="heading">My Profile</h6>
        </div>
        <div class="second d-flex flex-row mt-2"  >
            <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="80" /> </div>
                <div class="">
                    <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$user->name}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>E-mail: <strong>{{$user->email}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$user->contact_no}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$user->location}}</strong></span>
                    </div>
                    <div>
                        <a href="/front/profile/myad/{{$user->id}}" class="btn btn-outline-success">
                        My Ads </a>
                    </div>
                </div>
        </div>
            <hr class="line-color">
            <div class="third mt-2"> 
                <a href="/front/profile/updateprofile/" title="Update your profile" class="btn btn-outline-warning">
                Update Profile</a>
                
            </div>
            <div class="third mt-4"> 
                <a href="/front/profile/changepw/{{$user->id}}" title="Password update" class="btn btn-outline-warning">
                Change Password</a>
            </div>
            <div class="third mt-4"> 
                <a href="/front/profile/deleteuser/{{$user->id}}" title="Delete your profile" class="btn btn-outline-danger" onclick="return confirm('Are you sure? You will not be able to recover this.')">
             Deactivate Account <i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
    </div>
</div>
@endsection