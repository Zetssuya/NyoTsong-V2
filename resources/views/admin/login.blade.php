<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>NyoTsong</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
     {{-- New --}}
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    {{-- end of New --}}
{{-- 
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>

    <link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <link href="{{ url('assets/css/paper-dashboard.css') }}" rel="stylesheet"/> --}}

    <link href="{{ url('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="{{ url('assets/css/themify-icons.css') }}" rel="stylesheet">

    <link href="{{ url('/css/adminLogin.css') }}" rel="stylesheet">
    

</head>
<body>

{{-- Admin Log in Navbar     --}}
<nav class="navbar navbar-default navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">NyoTsong : Market of Possibilities</a>
</nav>
{{-- End of Admin Log in Navbar     --}}

{{-- Admin Log in Form --}}
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="myCard">
        <div class="row">
            <div class="col-md-6">
                <div class="myLeftCtn">
                    <header>Admin Log in</header>
                    <hr>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if ( session()->has('msg') )
                                <div class="alert alert-success">{{ session()->get('msg') }}</div>
                            @endif


                            <form method="post" action="/admin/login" class="myForm col-md-6">
                                @csrf

                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email"
                                        class="form-control myInput">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Password"
                                        class="form-control myInput">
                                </div>

                                <input type="submit" class="butt myInput" value="Log in">

                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Admin Log in Form --}}
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
