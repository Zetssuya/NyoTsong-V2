{{-- <link href="{{ asset('/css/saled.css') }}" rel="stylesheet"> --}}
@extends('front.layouts.master')
@section('content')

<div class="container flex-row mt-4">
<div class="row"> 

<div class="text-center col-sm" style="
        height: 420px;
        width: 654px;
        margin: 50px auto;
        background-color: rgb(100, 27, 143);
        border-radius: 7px 7px 7px 7px;
        -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .25), 0 3px 11px 8px rgba(0, 0, 0, 0.17) !important;">
    <h3 class="mb-4 heading" style="
            color: rgb(26, 24, 27) !important;
            ">Product Detail</h3>
            <div class="product-image">
              <img  src="{{ url('/uploads/') . '/' . $saledata->image }}" alt="Product image here"  style=" float: left;
                    height: 280px;
                    border-radius: 7px 10px 10px 7px;">
            </div>
        <div style="
                    border-radius: 0 7px 10px 7px;
                    background-color: #e2de9f;">    
        <div class="product-info" style="
                    height: 280px;
                    margin: 0 0 0 38px;
                    color: #070707;
                    line-height: 1.7em;
                    font-size: 15px;;
                    overflow: hidden;">
            <label>{{$saledata->name}}</label>
            <br>
            <label>Nu. {{$saledata->price}}</label>
            <br>
            <label>{{$saledata->detail}}</label>
            <br>      
            <label>{{$saledata->categories}}</label>
            <br>       
            <label>{{$saledata->location}}</label>        
        </div>
        </div>
</div>

<!-- user detail -->
<div class="text-center col-sm border" style="
            margin-left:10px !important;
            margin-top: 50px;
            margin-bottom: 50px !important;
            box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .25), 0 3px 11px 8px rgba(0, 0, 0, 0.17) !important; ">
        <div class="bio" >
            <img src="/assets/img/background.jpg" alt="background" class="bg" style="
            background-color: rgb(29, 25, 25);
            width: 50% !important;
            height: 50% !important;
            border-bottom: 8px solid rgb(100, 27, 143);">
        </div>
        <div class="image mr-3" style="
                                margin-left: 230px !important;
                                margin-top: -50px !important;
                                width: 70px;
                                height: 70px;
                                display: block;"> 
                <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="80"  style="
                            border: 8px solid rgb(100, 27, 143);
                            -webkit-border-radius: 50%;
                            -moz-border-radius: 50%;
                            -ms-border-radius: 50%;
                            -o-border-radius: 50%;
                            border-radius: 50%;
                            overflow: hidden;
                            position: relative;"/> 
        </div>
            <div class="mb-4" style="
                    margin-top: 30px !important;">
            <label>{{$user->name}}</label>
            <br>
            <label>{{$user->contact_no}}</label>
            <br>
            <label>{{$user->location}}</label>
            </div>
            <div class="third mt-4 mb-4"> 
                <a href="/front/userdetail/{{$user->id}}" title="Product Detail" class="btn btn-success">
                <i class="fa fa-cogs"></i> View User Details</a>
            </div>
        </div>

    </div> 
</div>



<!-- Comment section -->
<div class="panel-body border-bottom mb-4" 
        style="margin-left: 105px;
                margin-right: 670px;
                margin-top: 10px;
                border-radius: 25px;
                border-width: thick;
                border-color: rgb(8, 158, 158) !important">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <form id="comment-form" method="post" action="{{ action('SaleDetailController@store', ['id' => $saledata->id])}}" >
    {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
            <div class="row comment-row" 
                    style="margin-left: 0px;">
                <div class="form-group">
                    <textarea name="comment" placeholder="Ask the owner about the product" class="border" style="
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

{{-- This is displayed when an initial comment is made --}}
<div class="conatiner" style="margin-left: 150px" >
    <div class="col-md-8 col-md-offset-2" >
        <div class="panel panel-default">
            <div class="panel-heading"></div>

    <div class="panel-body comment-container">
        @foreach($comments as $comment)
        @if($comment->pro_id === $saledata->id)
        <div class="well">
            <div class="image mr-3" style="
                    margin-left: -150px !important;
                    margin-top: -40px !important"> 
                <img src="{{ url('/uploads/') . '/' . $comment->user_image }}" class="rounded-circle" width="40" /> 
                <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                <span> {{ $comment->comment }} </span>
            </div>
        <div>
                                
        <div>
        <a data-toggle="collapse" data-target="#{{ $comment->id }}" style="
            cursor: pointer;
            margin-left: -100px !important;
            margin-top: -70px !important;
            ">Reply</a>&nbsp;
        <a style="cursor: pointer;"  href="/front/comments/delete/{{ $comment->id }}" >Delete</a>
        <div id="{{ $comment->id }}" class="collapse">
{{--END OF This is displayed when an initial comment is made --}}

        <!-- reply form -->
        <form id="reply-form" method="post" action="{{ action('ReplyCommentController@store')}}" >
        {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" >
            <input type="hidden" name="name" value="{{ Auth::user()->name }}" >
            <div class="row" style="padding: 10px;">
                <div class="form-group">
                    <textarea name="reply" placeholder="Your reply goes here..." style="
                        margin-left: -95px;
                        font-family: inherit;
                        font-size: inherit;
                        padding: 5px 30px;
                        border-radius: 25px;
                        border-color: rgb(50, 14, 136) !important"></textarea>
                </div>
            </div>
            <div class="row" >
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
        @foreach($comment->replies as $rep)
        @if($comment->id === $rep->comment_id)
            <div class="well">
            <div class="image mr-3" style="
                margin-left: -100px !important;"> 
                <img src="{{ url('/uploads/') . '/' . $rep->user_image }}" class="rounded-circle" width="40"  /> 
                    <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                    <span> {{ $rep->reply }} </span>
            </div>
                                            
            <div >
                <a data-toggle="collapse" data-target="#{{ $rep->id }}" style="
                    cursor: pointer;
                    margin-left: -95px !important;
                    margin-top: -40px !important;
                    ">Reply</a>&nbsp;
                <a style="cursor: pointer;"  href="/front/replies/delete/{{ $rep->id }}" >Delete</a>
            </div>
            <div id="{{ $rep->id }}" class="collapse">

            <!-- reply form for reply -->
            <form id="reply-form" method="post" action="{{ action('ReplyCommentController@store')}}" >
            {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" >
                <input type="hidden" name="name" value="{{ Auth::user()->name }}" >

                <div class="row">
                    <div>
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