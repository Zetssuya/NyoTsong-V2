{{-- <link href="{{ asset('/css/myad.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
<style>
    body{
        background-image: url('/assets/img/adsview_wave.svg');
        background-position: top left;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 15%;
    }
</style>
<!--Trial -->
<div class = "container" style="margin-top:-50px">
    <div class = "products">
        <h5 class ="lg-title lead">Products for sale</h5>
      <div class="row">
      <!--Products for sale -->
        @foreach($saledata as $i => $sdata)
        <div id="saleproduct" class="col-md-3 column">
        <div class = "product-items" style="margin-top:-50px">
            <!-- single product -->
            <div class = "product">
                <div class = "product-content" style="background-color: rgb(81, 216, 176)">
                    <div class = "product-img">
                        <img src="{{ url('/uploads/') . '/' . $sdata->image }}" alt = "product image" height="200px" width="100%">
                    </div>
                </div>
                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title justify-text-center">{{$sdata->name}}</h2>
                    </div>
                    <a class = "product-name">Category: {{$sdata->categories}}</a>
                    <a class = "product-name" style="color: blueviolet">Price <i class="fa fa-money" aria-hidden="true"></i> Nu.{{$sdata->price}}</a>
                    <a class = "product-name">Detail: {{$sdata->detail}}</a>
                    <a class = "product-name" style="color: blueviolet">Location
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>:  
                        {{$sdata->location}}
                    </a>
                    <a href="/front/saledetail/{{$sdata->id}}" class="text-success product-name">
                      View details </a>
                    <div class="third mt-4"> 
                        <a href="/front/profile/editproduct/{{$sdata->id}}" title="Edit Product" class="btn btn-outline-success btn-sm">
                        Edit product info</a>
                    </div>
                    <!--Product Status Update -->
                    <div class="third mt-4"> 
                        <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Update product status
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Modal -->
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Product Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <form method="POST" action="/front/profile/markproduct/{{$sdata->id}}" class="profile-form border border-info form-shadow">
                                @csrf
                                @method('PUT')
                                <div class="dashboard-wrapper">
                                <div class="">
                                <select name="status" class="pl-lg-3 location form-control" id="location" required>
                                <option value="">Select status</option>
                                    <option value="Available">Available</option>
                                    <option value="Sold">Mark as Sold</option>
                                </select>
                                </div>
                                </div>
                                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                                    <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                        Update</button>
                                </div>
                                </form>
                            </div>
                            <!--End of Modal -->
                        </div>
                        </div>
                    </div>
                    <!--End of Product Status Update -->
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

<div class ="products" >
    <div class ="container" >
        <h6 class ="lg-title lead" style="margin-top: -60px">Items for donation</h6>
    <div class="row">
      @foreach($dondata as $i => $ddata)
      <div class="col-md-3" >
      <div class = "product-items" >
          <!-- single product -->
          <div class = "product" >
              <div class = "product-content" style="background-color: rgb(81, 216, 176)">
                  <div class = "product-img">
                      <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Products for donation" height="200px" width="100%">
                  </div>
              </div>
              <div class = "product-info">
                <div class = "product-info-top">
                    <h2 class = "sm-title justify-text-center">Item name: {{$ddata->name}}</h2>
                </div>
                <a class = "product-name">Location: {{$ddata->location}}</a>
                <a class = "product-name">Details: {{$ddata->detail}}</a>
                <a href="/front/donationdetail/{{$ddata->id}}" class="text-success product-name">
                    View details
                </a>
                <div class="third mt-4"> 
                    <a href="/front/profile/editdonproduct/{{$ddata->id}}" title="Edit Product" class="btn btn-outline-success btn-sm">
                    Edit item</a>
                </div>
                <div class="third mt-4">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#exampledModal">
                        Update item status
                        </button>
                        <!-- modal -->
                        <div class="modal fade" id="exampledModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Product Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>

                            <form method="POST" action="/front/profile/markdonproduct/{{$ddata->id}}" class="profile-form border border-info form-shadow">
                                @csrf
                                @method('PUT')
                                <div class="dashboard-wrapper">
                                <div class="">
                                <select name="status" class="pl-lg-3 location form-control" id="location" required>
                                <option value="">Select status</option>
                                    <option value="Available">Available</option>
                                    <option value="Donated">Mark as Donated</option>
                                </select>
                                </div>
                                </div>
                                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                                    <button type="submit" class="btn btn-info btn-lg btn-rounded" data-mdb-ripple-color="#6d721d" style="background-color:#b56912">
                                        Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <!-- modal end -->
                </div>
              </div>
          </div>
          @if($ddata->status)
          <div class = "off-info">
              <h2 class = "sm-title">Status: {{$ddata->status}}</h2>
          </div>
          @endif
        </div>
      </div>
        @endforeach  
  </div>
  </div>
  </div>
@endsection