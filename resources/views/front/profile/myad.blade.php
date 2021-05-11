<link href="{{ asset('/css/myad.css') }}" rel="stylesheet">
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
<div class="container flex-row mt-4">
    <h1 class="border mb-4 heading">My Ads</h1>
<div class="row">
        {{-- For Sale --}}
        <div class="col-sm offset-1 border border-info sale product-shadow">
            <h3>For Sale</h3>
            @foreach($saledata as $i => $sdata)
                <div class="product-image border-bottom border-top border-success mb-4">
                        <center>
                        <div class="third mt-4"> 
                            <a href="/front/profile/editproduct/{{$sdata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> Edit</a>
                        </div>
                        <div class="third mt-4"> 
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-cogs"></i>Update product status
                                </button>
                                <!-- modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                </div>
                                </div>
                                <!-- modal end -->
                        </div>
                        <div class="third mt-4"> 
                    <a href="/front/saledetail/{{$sdata->id}}" title="Product Detail" class="btn btn-success">
                    <i class="fa fa-cogs"></i> View Details</a>
                    </div>
                            
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
            <div class="third mt-4"> 
                            <a href="/front/profile/editdonproduct/{{$ddata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> Edit</a>
                        </div>
                        <div class="third mt-4"> 
                            
                                
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampledModal">
                                <i class="fa fa-cogs"></i>Update product status
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
                        <div class="third mt-4"> 
                                          <a href="/front/donationdetail/{{$ddata->id}}" title="Product Detail" class="btn btn-success">
                                          <i class="fa fa-cogs"></i> View Details</a>
                                      </div>

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
            </center>
          </div>
          @endforeach
          <!-- {{ $dondata->links() }} -->
</div>
</div>
</div>

@endsection