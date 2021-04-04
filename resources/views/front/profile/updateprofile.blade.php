@extends('front.layouts.master')

@section('content')

@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif

<form action="{{ action('UpdateUserProfileController@store')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">    
        <label for="prophoto">Select Your Profile Photo</label>
        <input type="file" name="image" class="form-control-file" id="prophoto">
        <span class="text-danger">{{$errors->first('image')}}</span>
    </div>
    <div class="form-group">
        <label for="phoneno">Enter Your Phone Number:</label>
        <input type="text" name="contact_no" class="form-control" id="phoneno"  placeholder="Enter phone number">
        <span class="text-danger">{{$errors->first('contact_no')}}</span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection