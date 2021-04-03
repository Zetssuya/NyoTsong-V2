<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link href="{{ asset('/css/userLogin.css') }}" rel="stylesheet">
@extends('front.layouts.master')

@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">

        <div class="myCard" id="register">

            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <header class="text-center">log in</header>
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

                        @if ( session()->has('msg') )

                            <div class="alert alert-success">{{ session()->get('msg') }}</div>

                        @endif

                        <form action="/user/login" method="post" class="myForm col-md-6" action="/user/register" method="post">

                            @csrf

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" placeholder="Email" id="email" class="form-control myInput">
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" placeholder="Password" id="password"
                                class="form-control myInput">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="butt" value="log in">
                            </div>

                        </form>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box"><header>NyoTsong</header>
                            
                            <h4>Market of Possibilities</h4>
                                {{-- <input type="button" class="butt_out" value="Read Here"/> --}}
                            </div>
                                
                    </div>
                </div>
            </div>


        </div>

    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection