@extends('front.layouts.master')

@section('content')

@if ( $errors->any() )

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif

<form method="POST" action="/front/profile/updatepw/{{$users->id}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
    <input type="password" name="password" placeholder="Enter New Password" id="password" class="form-control myInput">
</div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
@if ($errors->has('password_confirmation'))
    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
@endif
    <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control myInput">
</div>

     <input type="submit" class="butt" value="Update Password">
</form>

@endsection