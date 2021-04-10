<link href="{{ asset('/css/sale.css') }}" rel="stylesheet">
<link href="{{ asset('/css/updateprofile.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
<style>
    body{
        background-image: url('/assets/img/updatepassword_wave.svg');
        background-position: right;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 50%;
    }
</style>
@if ( $errors->any() )
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif

<div class="col-sm-12 col-md-8 col-lg-12 row justify-content-center mt-4 container">
    <div class="page-content col-md-9 col-11">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="font-weight-bold mb-3">
                        Change your password
                    </h2>
                </div>

                <form method="POST" action="/front/profile/updatepw/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                    @csrf
                    @method('PUT')
                    <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                        <label class="form-text text-muted">
                            New password
                        </label>
                        <input type="password" name="password" placeholder="Enter New Password" id="password" class="form-control">
                    </div>

                    <div class="pl-lg-2 col-lg-10 col-8 mb-2 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="form-text text-muted">
                            Confirm password
                        </label>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                    @endif
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                    </div>
                    <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                        <input type="submit" class="butt btn btn-info btn-lg btn-rounded" value="Update Password"  data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                    </div>
                        
                </form>
            </div>
        </div>    
    </div>
</div>

@endsection