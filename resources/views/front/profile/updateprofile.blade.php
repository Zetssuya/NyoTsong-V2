<link href="{{ asset('/css/sale.css') }}" rel="stylesheet">
<link href="{{ asset('/css/updateprofile.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
<style>
    body{
        background-image: url('/assets/img/updateprofile_wave.svg');
        background-position: right;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 50%;
    }
</style>
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
                        Update your profile
                    </h2>
                </div>

                <form method="POST" action="/front/profile/updateuser/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                @csrf
                @method('PUT')
                <div class="dashboard-wrapper">
        
                {{-- Name --}}
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <label class="form-text text-muted">
                        <strong> New name</strong>
                    </label>
                    <input type="text" name="name" placeholder="Name" id="name"class="form-control">
                </div>

                {{-- e-mail --}}
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <label class="form-text text-muted">
                        <strong> New e-mail</strong>
                    </label>
                    <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                </div>
                {{-- image --}}
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <label class="form-text text-muted">
                        <strong> New profile picture</strong>
                     </label>
                    <div>
                        <input type="file" name="image" id="image" class="form-control ">
                    </div>
                </div>
                {{-- Contact No --}}
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <label class="form-text text-muted">
                        <strong> New contact no.</strong>
                     </label>
                    <div>
                    <input type="text" name="contact_no" placeholder="Contact number" id="contact_no" class="form-control required">
                </div>

                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                         Update profile </button>
                </div>
                </form>
            </div>
            </div>
        </div>
</div>

@endsection