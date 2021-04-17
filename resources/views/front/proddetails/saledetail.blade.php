{{-- <link href="{{ asset('/css/saled.css') }}" rel="stylesheet"> --}}
@extends('front.layouts.master')
@section('content')

<div class="container flex-row mt-4">
<div class="row"> 

<div class="text-center col-sm border" >
    <h1 class="mb-4 heading">Product Detail</h1>
          <div class="product-image">

          <div class="product-info">
              <img  src="{{ url('/uploads/') . '/' . $saledata->image }}" alt="Product image here" 
              style="border-radius: 8px;
                    height: 200px;
                    ">
          </div>

            <h5>{{$saledata->name}}</h5>
            <h6>Nu. {{$saledata->price}}</h6>
            <h6>{{$saledata->detail}}</h6>       
            <h6>{{$saledata->categories}}</h6>       
            <h6>{{$saledata->location}}</h6>        
          </div>
</div>
<!-- user detail -->
<div class="text-center col-sm">
    <h1 class="border mb-4 heading">User Detail</h1>
            <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="80" /> </div>
                <div class="">
                    <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$user->name}}</strong></span>
                    </div>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$user->contact_no}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$user->location}}</strong></span>
                    </div>
                    

                <div class="third mt-4"> 
                                          <a href="/front/userdetail/{{$user->id}}" title="Product Detail" class="btn btn-success">
                                          <i class="fa fa-cogs"></i> View User Details</a>
                                      </div>
        </div>
    </div> 
</div>



<!-- Comment section -->
<div class="panel-body border-bottom" 
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
            margin-left: -95px !important;
            margin-top: -40px !important;
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
        @foreach($comment->replies as $rep)
        @if($comment->id === $rep->comment_id)
            <div class="well" style="margin-left:50px;">
            <div class="image mr-3"> 
                <img src="{{ url('/uploads/') . '/' . $rep->user_image }}" class="rounded-circle" width="40" /> 
                    <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                    <span> {{ $rep->reply }} </span>
            </div>
                                            
            <div style="margin-left:10px;">
                <a style="cursor: pointer;"  data-toggle="collapse" data-target="#{{ $rep->id }}">Reply</a>&nbsp;
                <a style="cursor: pointer;"  href="/front/replies/delete/{{ $rep->id }}" >Delete</a>
            </div>
            <div id="{{ $rep->id }}" class="collapse">
            <!-- reply form -->
            <form id="reply-form" method="post" action="{{ action('ReplyCommentController@store')}}" >
            {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" >
                <input type="hidden" name="name" value="{{ Auth::user()->name }}" >

                <div class="row" style="padding: 10px;">
                    <div class="form-group">
                        <textarea class="form-control" name="reply" placeholder="Write reply from your heart!"></textarea>
                    </div>
                </div>
                <div class="row" style="padding: 0 10px 0 10px;">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" style="width: 100%" name="submit">
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