@extends('front.layouts.master')
@section('content')

@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif 

<!-- Feedback system -->
<div>
    <h3>System Feedback</h3>
</div>
<div class="modal-body" >
        <form  method="post" action="{{ action('FeedbackSystemController@store')}}">
        @csrf
        <div>
        <h6>Provide us feedback </h6>
        <textarea class="form-control description" name="feedback" placeholder="Enter product description" type="text"></textarea>
        </div><br/>
        <button type="submit" class="btn btn-primary">Send Feedback</button>
        </form>
</div>
<div>
    <h3>Some feedbacks given by our users</h3>
</div>
<div>
    @foreach($feedbacks as $i => $feed)
    <p>{{$feed->feedback}}</p>
    @endforeach
</div>
@endsection