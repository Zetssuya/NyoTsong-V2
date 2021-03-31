
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
    <a class="nav-link" href="category">
    Categories
    </a>
    </li>
    <li class="nav-item dropdown">
    <li class="nav-item dropdown">
    <a class="nav-link" href="about" aria-haspopup="true" aria-expanded="false">
    About
    </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="contact">
    Contact
    </a>
    </li>
    <li class="nav-item dropdown active">
    <a class="nav-link" href="post-ads" aria-haspopup="true" aria-expanded="false">
    Post an Ad
    </a>
    </li>

                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ auth()->check() ? auth()->user()->name : 'Account' }}
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
