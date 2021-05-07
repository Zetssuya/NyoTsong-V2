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
   

    <li class="nav-item dropdown notification">
        @if (!auth()->check())
        @else
        <a class="nav-link" href=""  data-toggle="dropdown" aria-haspopup="true">
        @if($user->unreadNotifications->count())
        <i class="fa fa-bell">{{$user->unreadNotifications->count()}}</i>
        @else
        <i class="fa fa-bell"></i>
        @endif

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                    @forelse($user->unreadNotifications as $notification)
                        @if($notification->data['product_type']==1)
                            <a class="dropdown-item " href="/front/saledetail/{{$notification->data['id']}}">{{ $notification->data['comment'] }}</a>
                            @if($user->unreadNotifications->count())
                                <a class="dropdown-item " href="/front/readnotification/{{$notification->id}}">Mark as read</a>
                                
                            @else
                            @endif
                        @else
                            <a class="dropdown-item " href="/front/donationdetail/{{$notification->data['id']}}">{{ $notification->data['comment'] }}</a>
                            @if($user->unreadNotifications->count())
                                <a class="dropdown-item " href="/front/readnotification/{{$notification->id}}">Mark as read</a>
                                
                            @else
                            @endif
                        @endif
                    @empty
                    <a class="dropdown-item " href="#">No Notifications</a>
                    @endforelse 
                  
                   
                    
            </div>
        @endif
            
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
        @if (!auth()->check())
        <a class="nav-link" href="#"
             data-toggle="dropdown" aria-haspopup="true">
                <i class="fa fa-user-circle-o"></i>
                    {{ auth()->check() ? auth()->user()->name : 'Account' }}
                </a>
        @else
        <a class="nav-link" href="#"
             data-toggle="dropdown" aria-haspopup="true">
             <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="30" height="30">
                    {{ auth()->check() ? auth()->user()->name : 'Account' }}
                </a>
        @endif
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
