@extends('front.layouts.master')

@section('content')


    <div class="container translate-middle">

    <div class="myCard" id="register">

        <div class="row">
            <div class="col-md-6">
                <div class="myLeftCtn">
                    <header class="text-center">Sign Up</header>
                    <hr>

                    @if ( $errors->any() )

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    <form class="myForm col-md-6" action="/user/register" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" id="name" class="form-control myInput">
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control myInput">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" id="password" class="form-control myInput">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control myInput">
                        </div>

                        <div class="form-group">
                            <span class="btn btn-common">Your Profile Photo</span>
                            <input id="tg-photogallery" class="tg-fileinput" type="file" name="image">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_no" placeholder="Enter contact number" id="contact_no" class="form-control myInput">
                        </div>
                        <div class="form-group">
                            <label class="form-text text-muted">
                                Location
                            </label>
                        <div>
                            <select name="location" class="pl-lg-3 location form-control" id="location" required>
                            <option value="">Select location</option>
                            @foreach($locations as $i => $location)
                                <option value="{{$location->location}}">{{$location->location}}</option>
                            @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input id="check_1" name="check_1"  type="checkbox" required><small><a href="/tc"> I read and agree to T&Cs</a></small> 
                                <div class="invalid-feedback">You must check the box.</div>
                            </label>
                        </div>
                            <input type="submit" class="butt" value="Create Account">
                            
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="myRightCtn">
                        <div class="box"><header>Please Note!</header>
                        
                        <h6>Before creating account with NyoTsong, please make sure you have read our privacy & general usage T&Cs.</h6>
                            <a type="button" class="btn btn-success" href="/tc">Read Here</a>
                        </div>
                            
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

