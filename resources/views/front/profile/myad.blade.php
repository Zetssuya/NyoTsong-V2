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