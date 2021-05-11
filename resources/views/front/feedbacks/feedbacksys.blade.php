<link href="{{ asset('assets/css/feedbacksys.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif 

<!-- Feedback system -->
<center>
<div  class="border-primary"  style="margin-top: 20px;
                            width: 50%;
                            border: 2px solid;
                            border-radius: 25px;">
    <div class="modal-body text-center border" >
    <div class="h3 font-weight-bold mb-4" style="color: rgb(101, 33, 156)">
            We would like to hear from you
    </div>
            <form  method="post" action="{{ action('FeedbackSystemController@store')}}">
            @csrf
            <div>
            <h5 class="font-weight-bold mb-4" style="color: rgb(101, 33, 156)">Help us improve our application </h5>
            <textarea class="description" name="feedback" placeholder="Enter product description" type="text" style="
                    align-content: center;
                    width: 60%;
                    border: 2px solid rgb(90, 13, 134)">
            </textarea>
            </div><br/>
            <button type="submit" class="btn btn-outline-info text-dark">Send Feedback</button>
            </form>
            <h3 style=" color: rgb(101, 33, 156)">Some feedbacks given by our users</h3>
    </div>
</div>
</center>
    <div>
        @foreach($feedbacks as $i => $feed)
        <p>{{$feed->feedback}}</p>
        @endforeach
    </div>
@endsection
