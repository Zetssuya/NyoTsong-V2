@extends('front.layouts.master')

@section('content')
    <div class="container">

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
                                <input type="submit" class="butt mb-4" value="log in">  
                            </div>
                            <small>Don't have an account yet?</small>
                            <br>
                            <a class="btn butt" href="/user/register" title="User registration"> Sign up</a>
                        </form>

                    </div>

                </div>
                    <div class="col-md-6">
                        <div class="myRightCtn">
                            <div class="box"><header>NyoTsong</header>
                            <h4>Market of Possibilities</h4>
                            </div>
                                
                        </div>
                    </div>
            </div>


        </div>

    </div>
@endsection