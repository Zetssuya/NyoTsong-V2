@extends('front.layouts.master')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style>
    body{
        background-image: 
        url('/assets/img/don_wave2.svg'),
        url('/assets/img/don_wave.svg');
        background-position: 
        right,
        left;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 
        10%,
        5%;
    }
</style>
<div class="container flex-row mt-4">
<div class="row">
    <!--Product details -->
    <div class="text-center col-md-7" style="
                height: 420px;
                width: 700px !important;
                margin: 50px auto;
                background-color: rgb(255, 255, 255);
                border-radius: 7px 7px 7px 7px;
                -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
                -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
                box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
                box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .25), 0 3px 11px 8px rgba(0, 0, 0, 0.17) !important;">
        <h3 class="mb-4 heading" style="
        font-family: Audiowide, sans-serif;
        color: rgb(26, 24, 27) !important;
        ">Item details</h3>
            <div class="product-image">
                <img  src="{{ url('/uploads/') . '/' . $dondata->image }}" alt="Product image here"  style=" float: left;
                         height: 280px !important;
                         max-width: 50%;
                    border-radius: 7px 10px 10px 7px;">
            </div>
            <div style="
                    border-radius: 0 7px 10px 7px;
                    background-color: #f0edf1;">
            <div class="product-info border-right border-bottom border-success" style="
                        border-radius: 25px;
                        height: 280px;
                        margin: 0 0 0 38px;
                        color: #070707;
                        line-height: 1.7em;
                        font-size: 15px;;
                        overflow: hidden;">
                <label>Product name: <b>{{$dondata->name}}</b></label>
                <br>
                <label>Description: <b>{{$dondata->detail}}</b></label>
                <br>
                <label>Location: <b>{{$dondata->location}}</b></label>
            </div>
            </div>
    </div>

<!-- user detail -->
<div class="text-center col-sm"style="
            margin-left:50px !important;
            margin-top: 50px;
            margin-bottom: 50px !important;
                ">
                    <h3 class="mb-4 heading" style="
                    font-family: Audiowide, sans-serif;
                    color: rgb(26, 24, 27) !important;
                    ">Donator bio</h3>
        {{-- <div class="bio" >
            <img src="/assets/img/background.jpg" alt="background" class="bg" style="
            background-color: rgb(29, 25, 25);
            width: 50% !important;
            height: 50% !important;
            border-bottom: 8px solid rgb(100, 27, 143);">
        </div> --}}
        <div class="image" style="
                                margin-left: -50px !important;
                                margin-top: -60px !important;
                                width: 70px;
                                height: 70px;"> 
                <img src="{{ url('/uploads/') . '/' . $users->image }}" class="rounded-circle" width="80"  style="
                            border: 4px solid rgb(23, 135, 143);
                            -webkit-border-radius: 50%;
                            -moz-border-radius: 50%;
                            -ms-border-radius: 50%;
                            -o-border-radius: 50%;
                            border-radius: 50%;
                            overflow: hidden;
                            position: relative;"/> 
        </div>
            <div class="mb-4" style="
                    margin-top: -10px !important;
                    border: 4px solid rgb(23, 135, 143);
                    background-color:#ffffff;
                    border-radius: 25px;">
            <label >Name: <b>{{$users->name}}</b></label>
            <br>
            <label >Quantity: <b>{{$users->quantity}}</b></label>
            <br>
            <label >Phone no. <b>{{$users->contact_no}}</b></label>
            <br>
            <label >Location: <b>{{$users->location}}</b></label>
            </div>
            <div class="third mt-4 mb-4"> 
                <a href="/front/userdetail/{{$users->id}}" title="Product Detail" class="btn btn-outline-success">
                 View user details</a>
            </div>
    </div>

</div>
</div>


<!-- Comment section -->
<div class="panel-body border-bottom mb-5" style="
            margin-left: 105px;
            margin-right: 670px;
            margin-top: 10px;
            border-radius: 25px;
            border-width: thick;
            border-color: rgb(8, 158, 158) !important;
            
            @media (max-width:500px){
                margin-top: 100px !important;
            } ">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form id="comment-form" method="post" action="{{ action('DonationDetailController@store', ['id' => $dondata->id])}}" >
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
        <div class="row comment-row"  
                    style="margin-left: 0px;">
        <div class="form-group">
            <textarea class="form-control" name="comment" placeholder="Write something from your heart!" style="
                        font-family: inherit;
                        font-size: inherit;
                        padding: 5px 100px;
                        border-radius: 25px;
                        border-color: rgb(50, 14, 136) !important"></textarea>
        </div>
        </div>
        <div class="row comment-submit" style="padding: 0 10px 0 10px;">
            <div class="form-group">
                <button type="button submit" class="btn btn-warning" name="send" style="
                            padding: 10px 30px;
                            margin-left: 370px;
                            margin-top: -130px;
                            border-radius: 25px">
                Comment <i class="fa fa-comment-o" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>


<div class="conatiner" style="margin-left: 150px">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading"></div>

        <div class="panel-body comment-container" >
        @foreach($comments as $comment)
        @if($comment->pro_id === $dondata->id)
        <div class="well">
        <div class="image mb-5" style="
                    margin-left: -150px !important;
                    margin-top: -40px !important"> 
                <img src="{{ url('/uploads/') . '/' . $comment->user_image }}" class="rounded-circle" width="40" /> 
                <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                <span> {{ $comment->comment }} </span>
        </div>
        <div >
                                
        <div >
        <div class="mb-5" style=" 
        margin-top: -60px !important;
        margin-left: -90px !important">
        <a  data-toggle="collapse" data-target="#{{ $comment->id }}" style="
                        cursor: pointer">Reply</a>&nbsp;

        <a style="cursor: pointer;"  href="/front/doncomments/delete/{{ $comment->id }}" >Delete</a>
        </div>
        <div id="{{ $comment->id }}" class="collapse">
        <!-- reply form -->
        <form id="reply-form" method="post" action="{{ action('DonationDetailController@replydonstore', ['id' => $dondata->id])}}" >
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" >
            <input type="hidden" name="name" value="{{ Auth::user()->name }}" >
            <div class="row" style="padding: 10px;">
            <div class="form-group">
                <textarea name="reply" placeholder="Write reply from your heart!"style="
                margin-top:-40px !important; 
                margin-left: -85px;
                font-family: inherit;
                font-size: inherit;
                padding: 5px 30px;
                border-radius: 25px;
                border-color: rgb(50, 14, 136) !important"></textarea>
            </div>
            </div>

            <div class="row mb-5" >
                <div class="form-group">
                    <button type="button submit" class="btn btn-warning" name="send" style="
                    padding: 5px 20px;
                    margin-left: 150px;
                    margin-top: -150px;
                    border-radius: 25px">
                Reply <i class="fa fa-reply" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
        </div>
        </div>

        {{-- Reply display div from here --}}
        @foreach($replies as $rep)
        @if($comment->id === $rep->comment_id)
        <div class="well" >
        <div class="image mb-5"  style="
                     margin-left: -100px !important;"> 
        <img src="{{ url('/uploads/') . '/' . $rep->user_image }}" class="rounded-circle" width="40" /> 
        <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
            <span> {{ $rep->reply }} </span>
        </div>
                                            
        <div class="mb-5" style="
                    margin-top: -50px !important;
                    margin-left: 50px !important">
            <a data-toggle="collapse" data-target="#{{ $rep->id }}" style="
                cursor: pointer;
                margin-left: -95px !important;
                margin-top: -40px !important;
                ">Reply</a>&nbsp;
            <a style="cursor: pointer;"  href="/front/donreplies/delete/{{ $rep->id }}" >Delete</a>
        </div>

        <div id="{{ $rep->id }}" class="collapse">
                  <!-- reply form for reply -->
        <form id="reply-form" method="post" action="{{ action('DonationDetailController@replydonstore', ['id' => $dondata->id])}}" >
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" >
            <input type="hidden" name="name" value="{{ Auth::user()->name }}" >
            <div class="row" >

            <div >
                <textarea name="reply" placeholder="Write reply from your heart!" style="
                                margin-left: -95px;
                                font-family: inherit;
                                font-size: inherit;
                                padding: 5px 30px;
                                border-radius: 25px;
                                border-color: rgb(50, 14, 136) !important"></textarea>
            </div>
            </div>
            
            <div class="row" style="padding: 0 10px 0 10px;">
            <div class="form-group">
                <button type="button submit" class="btn btn-warning" name="send" style="
                            padding: 5px 20px;
                            margin-left: 120px;
                            margin-top: -100px;
                            border-radius: 25px">
                            Reply <i class="fa fa-reply" aria-hidden="true"></i></button>
            </div>
            </div>
        </form>
    </div>
</div>
@endif 
@endforeach
</div>
</div>
@endif 
@endforeach
</div>
</div>
</div>
</div>
</div>
@endsection