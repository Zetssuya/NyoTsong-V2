<link href="{{ asset('/css/navbar.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top page-header">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">NyoTsong : Market of Possibilities</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
    <a class="nav-link" href="/" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-home" aria-hidden="true"></i>
    Home
    </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="category">
        <i class="fa fa-list-alt" aria-hidden="true"></i>
    Categories
    </a>
    </li>
    <li class="nav-item dropdown">
    <li class="nav-item dropdown">
    <a class="nav-link" href="about" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
    About
    </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="contact">
        <i class="fa fa-mobile" aria-hidden="true"></i>
    Contact
    </a>
    </li>
    <li class="nav-item dropdown active">
    <a class="nav-link" href="{{ url('/front/postadd/postad') }}" aria-haspopup="true" aria-expanded="false">
    <button class="btn btn-light" type="button"><i class="fa fa-location-arrow" aria-hidden="true"></i>
    Post an Ad
    </button>
    </a>
    </li>
    

                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-light" type="button"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            {{ auth()->check() ? auth()->user()->name : 'Account' }}
                        </button>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        @if (!auth()->check())
                            <a class="dropdown-item " href="{{  url('user/login') }}">Login</a>
                            <a class="dropdown-item" href="{{  url('user/register') }}">Register</a>
                        @else
                            <a class="dropdown-item" href="{{  url('user/profile') }}"><i class="fa fa-user"></i> Profile</a>
                            <hr>
                            <a class="dropdown-item" href="{{  url('user/logout') }}"><i class="fa fa-lock"></i> Logout</a>
                        @endif
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="/admin"><i class="fa fa-id-card-o"></i> Admin Login
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
