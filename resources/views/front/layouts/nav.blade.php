<link href="{{ asset('/css/navbar.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top page-header navbar-inner">
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
    Home
    </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="about" aria-haspopup="true" aria-expanded="false">
    About
    </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="contact">
    Contact
    </a>
    </li>

    {{-- Post Ad --}}
    <li class="nav-item p-0 px-md-3 nav-item-special mx-auto mx-md-0">
    <a class="nav-link" href="{{ url('/front/postadd/postad') }}" target="_self">
    {{-- <button class="btn btn-success" type="button"> --}}
    <span>Post an Ad </span>
    {{-- </button> --}}
    </a>
    </li>

    <li class="nav-item dropdown account">
        <a class="nav-link" href="#"
             data-toggle="dropdown" aria-haspopup="true">
                <i class="fa fa-user-circle-o"></i>
                    {{ auth()->check() ? auth()->user()->name : 'Account' }}
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

    </ul>
        </div>
    </div>
</nav>
