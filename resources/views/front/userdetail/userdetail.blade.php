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

<!-- Ads of the user -->
<link href="{{ asset('/css/myad.css') }}" rel="stylesheet">

<style>
    body{
        background-image: url('/assets/img/adsview_wave.svg');
        background-position: top left;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 15%;
    }
</style>
<div class="container flex-row mt-4">
    <h1 class="border mb-4 heading">Ads by <strong>{{$user->name}}</strong></h1>
<div class="row">
        {{-- For Sale --}}
        <div class="col-sm offset-1 border border-info sale product-shadow">
            <h3>For Sale</h3>
            @foreach($saledata as $i => $sdata)
                <div class="product-image border-bottom border-top border-success mb-4">
                        <center>
                     
                            <div class="product-info mx-auto d-block border">
                                <img  height = "200px" src="{{ url('/uploads/') . '/' . $sdata->image }}" alt="Product image here" >
                            </div>
                            <div class="border">
                            <label>Product name <i class="fa fa-product-hunt" aria-hidden="true"></i> :</label>
                                <h6 class="text-primary">{{$sdata->name}}</h6>
                            </div>
                            <div class="border">
                            <label>Product category <i class="fa fa-sitemap" aria-hidden="true"></i> :</label>
                                <h6 class="text-warning">{{$sdata->categories}}</h6>
                            </div>
                            <div class="border">
                            <label>Product price <i class="fa fa-money" aria-hidden="true"></i> :</label>
                                <h6 class="text-warning">Nu.{{$sdata->price}}</h6>
                            </div>
                            <div class="border">
                            <label>Product description <i class="fa fa-asterisk" aria-hidden="true"></i> :</label>
                                <h6 class="text-warning">{{$sdata->detail}}</h6>
                            </div>
                            <div class="border">
                            <label>Product location <i class="fa fa-map-marker" aria-hidden="true"></i> :</label>
                                <h6 class="text-warning">{{$sdata->location}}</h6>
                            </div>
                            <span class="text-success h6"> <a href="/front/saledetail/{{$sdata->id}}" class="text-success h6">
                      View details </a></span><br/>
                        </center>
                </div>
            @endforeach
                <!-- {{ $saledata->links() }} -->
        </div>

{{-- For donation --}}
<div class="col-sm offset-1 border border-info donation product-shadow">
<h3>For Donation</h3>
@foreach($dondata as $i => $ddata)
          <div class="product-image border-bottom border-top border-success mb-4">
            <center>
          
            <div class="product-info mx-auto d-block border">
                <img  height = "200px" src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Product image here" >
            </div>
            <div class="border">
            <label>Item name <i class="fa fa-product-hunt" aria-hidden="true"></i> :</label>
                <h6 class="text-primary">{{$ddata->name}}</h6>
            </div>
            <div class="border">
            <label>Product description <i class="fa fa-asterisk" aria-hidden="true"></i> :</label>
                <h6 class="text-warning">{{$ddata->detail}}</h6>
            </div>
            <div class="border">
            <label>Product location <i class="fa fa-map-marker" aria-hidden="true"></i> :</label>
                <h6 class="text-warning">{{$ddata->location}}</h6>
            </div>
            <span class="text-success h6"> 
                <a href="/front/donationdetail/{{$ddata->id}}" class="text-success h6">
                View details </a></span><br/>
            </center>
          </div>
          @endforeach
          <!-- {{ $dondata->links() }} -->
</div>
</div>
</div>
@endsection