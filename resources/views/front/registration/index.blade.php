<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link href="{{ asset('/css/register.css') }}" rel="stylesheet">
@extends('front.layouts.master')

@section('content')


    <div class="container position-absolute top-50 start-50 translate-middle">

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

                    <form class="myForm col-md-6" action="/user/register" method="post">

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
                            <label>
                                <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to T&Cs</small> 
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
                            <input type="button" class="butt_out" value="Read Here"/>
                        </div>
                            
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

