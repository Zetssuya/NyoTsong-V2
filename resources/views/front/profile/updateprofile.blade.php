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
                <div class = "mb-5">
                
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                Update Name <i class="fa fa-user" aria-hidden="true"></i>
                </button>
                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <form method="POST" action="/front/profile/updatename/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                        @csrf
                        @method('PUT')
                        <div class="dashboard-wrapper">
                        <div class="">
                            <input type="text" name="name" placeholder="Enter New Name" id="name"class="form-control">
                        </div>
                        </div>
                        <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                            <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                <br>
                <br>
                <!-- modal end -->

                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#emailModal">
                Update Email <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </button>
                <!-- modal -->
                <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <form method="POST" action="/front/profile/updateemail/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                        @csrf
                        @method('PUT')
                        <div class="dashboard-wrapper">
                        <div class="">
                            <input type="text" name="email" placeholder="Enter New email" id="email" class="form-control">
                        </div>
                        </div>
                        <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                            <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                <br>
                <br>
                <!-- modal end -->

                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#imageModal">
                Update profile photo <i class="fa fa-picture-o" aria-hidden="true"></i>
                </button>
                <!-- modal -->
                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Profile Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <form method="POST" action="/front/profile/updateimage/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                        @csrf
                        @method('PUT')
                        <div class="dashboard-wrapper">
                        <div class="">
                            <div>
                                <input type="file" name="image" id="image" class="form-control ">
                            </div>
                        </div>
                        </div>
                        <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                            <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                <br>
                <br>
                <!-- modal end -->

                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#pnoModal">
                Update Phone Number <i class="fa fa-mobile" aria-hidden="true"></i>
                </button>
                <!-- modal -->
                <div class="modal fade" id="pnoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Phone Number</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <form method="POST" action="/front/profile/updatenumber/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                        @csrf
                        @method('PUT')
                        <div class="dashboard-wrapper">
                        <div class="">
                            <div>
                                <input type="text" name="contact_no" placeholder="Contact number" id="contact_no" class="form-control required">
                               
                            </div>
                        </div>
                        </div>
                        <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                            <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                <br>
                <br>
                <!-- modal end -->

                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#locModal">
                Update Location <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                </button>
                <!-- modal -->
                <div class="modal fade" id="locModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Location</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <form method="POST" action="/front/profile/updatelocation/{{$users->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                        @csrf
                        @method('PUT')
                        <div class="dashboard-wrapper">
                        <div class="">
                            <div>
                            <select name="location" class="pl-lg-3 location form-control" id="location" required>
                            <option value="">Select location</option>
                            @foreach($locations as $i => $location)
                                <option value="{{$location->location}}">{{$location->location}}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        </div>
                        <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                            <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                <!-- modal end -->

                </div>
                

     
            </div>
        </div>
    </div>
</div>

@endsection