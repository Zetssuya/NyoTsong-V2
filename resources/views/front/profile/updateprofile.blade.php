@extends('front.layouts.master')

@section('content')

@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif

<form method="POST" action="/front/profile/updateuser/{{$users->id}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
    <input type="text" name="name" placeholder="Name" id="name" class="form-control myInput">
</div>

<div class="form-group">
    <input type="text" name="email" placeholder="Email" id="email" class="form-control myInput">
</div>
<div class="form-group">
    <input type="file" name="image" id="image" class="form-control myInput">
</div>            
<div class="form-group">
    <input type="text" name="contact_no" placeholder="Contact number" id="contact_no" class="form-control myInput">
</div>
<div class="form-group">
 </div>
     <input type="submit" class="butt" value="Update User Account">
</form>

@endsection