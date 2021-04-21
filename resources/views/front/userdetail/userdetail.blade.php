<link href="{{ asset('/css/userprofileindex.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

<!--User Profile -->
<div class="container mt-6 d-flex justify-content-center mb-5" style="
                                                                  margin-top: 20px !important">
  <div class="card p-4 mt-3 shadow-custom">
      <div class="first">
          <h6 class="heading">User info</h6>
      </div>
      <div class="second d-flex flex-row mt-2">
          <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="80" /> </div>
              <div class="">
                  <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$user->name}}</strong></span>
                  </div>
                  <div class="d-flex flex-row mb-1"> <span>E-mail: <strong>{{$user->email}}</strong></span>
                  </div>
                  <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$user->contact_no}}</strong></span>
                  </div>
                  <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$user->location}}</strong></span>
                  </div>
              </div>
      </div>
          {{-- <hr class="line-color">
          <div class="third mt-2"> 
              <a href="/front/profile/updateprofile/{{$user->id}}" title="Update your profile" class="btn btn-success">
              <i class="fa fa-cogs"></i> Update Profile</a>
          </div>
          <div class="third mt-4"> 
              <a href="/front/profile/changepw/{{$user->id}}" title="Password update" class="btn btn-success">
              <i class="fa fa-key"></i> Change Password</a>
          </div>
          <div class="third mt-4"> 
              <a href="/front/profile/deleteuser/{{$user->id}}" title="Delete your profile" class="btn btn-danger" onclick="return confirm('Are you sure? You will not be able to recover this.')">
                  <i class="fa fa-user-times"></i> Deactivate Account</a>
          </div> --}}
  </div>
</div>

{{-- <div class="container mt-6 d-flex justify-content-center">
    <div class="card p-4 mt-3 shadow-custom">
        <div class="first">
            <h6 class="heading">User Details</h6>
        </div>
        <div class="second d-flex flex-row mt-2">
            <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="80" /> </div>
                <div class="">
                    <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$user->name}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>E-mail: <strong>{{$user->email}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$user->contact_no}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$user->location}}</strong></span>
                    </div>
                </div>
        </div>
    </div>
</div> --}}

<!--user rating -->
<center>
<button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">
  Rate this user
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
</button>

@if($message = Session::get('msg'))
    <div class="alert alert-success ">
        <strong class="border-top">{{ $message }}</strong>
    </div>
@endif
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Rating</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ action('UserDetailController@store', ['id' => $user->id])}}" method="post">
        @csrf
        <div>
        <h6>Rate this User </h6>
            <select name="rating" class="pl-lg-3 location form-control" id="location" required>
                <option value="1" style="color: #ff0202">★</option>
                <option value="2" style="color: #ec4c0d">★★</option>
                <option value="3" style="color: #a9e012">★★★</option>
                <option value="4" style="color: #42e918">★★★★</option>
                <option value="5" style="color: #099b09">★★★★★</option>
            </select>
        </div><br/>
        <button type="submit" class="btn btn-outline-primary">Rate</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


    <h3 style="
                color: rgb(178, 44, 196)">Average user rating</h3>
      <div >
        <h1>
  {{$avgrating}}
      </h1>
      </div>
</center>
@endsection