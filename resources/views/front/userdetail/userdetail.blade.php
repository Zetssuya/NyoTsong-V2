<link href="{{ asset('/css/userprofileindex.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
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
          <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $users->image }}" class="rounded-circle" width="80" /> </div>
              <div class="">
                  <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$users->name}}</strong></span>
                  </div>
                  <div class="d-flex flex-row mb-1"> <span>E-mail: <strong>{{$users->email}}</strong></span>
                  </div>
                  <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$users->contact_no}}</strong></span>
                  </div>
                  <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$users->location}}</strong></span>
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
            <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $users->image }}" class="rounded-circle" width="80" /> </div>
                <div class="">
                    <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$users->name}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>E-mail: <strong>{{$users->email}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$users->contact_no}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$users->location}}</strong></span>
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
        <form action="{{ action('UserDetailController@store', ['id' => $users->id])}}" method="post">
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
    <h1 class="heading">Ads by <strong>{{$users->name}}</strong></h1>
<div class="row">
        {{-- For Sale --}}
        <div class = "container">
            <div class = "products">
                <h3 class = "lg-title">Products for sale</h3>
              <div class="row">
              <!--Products for sale -->
                @foreach($saledata as $i => $sdata)
                <div id="saleproduct" class="col-md-3 column">
                <div class = "product-items">
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src="{{ url('/uploads/') . '/' . $sdata->image }}" alt = "product image" height="200px" width="100%">
                            </div>
                        </div>
          
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title justify-text-center">{{$sdata->name}}</h2>
                            </div>
                            <a class = "product-name">Nu. {{$sdata->price}}</a>
                            <p class = "product-price">{{$sdata->detail}}</p>
                            <a href="/front/saledetail/{{$sdata->id}}" class="text-success product-name">
                              View details </a>
                        </div>
          
                        <div class = "off-info">
                            <h2 class = "sm-title">{{$sdata->negotiation}}</h2>
                           
                        </div>
                        
                    </div>
                  </div>
          
                </div>
                @endforeach
                </div>
              </div>
            </div>

{{-- For donation --}}
<div class ="products" style="margin-top: -30px">
    <div class ="container">
      <h3 class="lg-title">Products for donation</h3>
    <div class="row">
    @foreach($dondata as $i => $ddata)
    <div class="col-md-3">
    <div class = "product-items">
        <!-- single product -->
        <div class = "product">
            <div class = "product-content">
                <div class = "product-img">
                    <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Products for donation" height="200px" width="100%">
                </div>
            </div>

            <div class = "product-info">
                <div class = "product-info-top">
                    <h2 class = "sm-title justify-text-center">Item name: {{$ddata->name}}</h2>
                </div>
                <p class = "product-price">Item description: {{$ddata->detail}}</p>
                <a href="/front/donationdetail/{{$ddata->id}}" class="text-success product-name">
                  View details </a>
            </div> 
        </div>
      </div>
    </div>
      @endforeach  
</div>
</div>
</div>
</div>
</div>
@endsection