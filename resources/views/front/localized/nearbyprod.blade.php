@extends('front.layouts.master')
@section('content')

<div class="container flex-row mt-4">
    <h1 class="border mb-4 heading">Nearby Products</h1>
<div class="row">

<section class="products">
    <div class="row">
    
    <div class="product-card text-center col-sm" >
    <h3>Sale Products</h3>
          <div class="product-image">
          @foreach($saledata as $i => $sdata)
          <div class="product-info">
              <img  src="{{ url('/uploads/') . '/' . $sdata->image }}" alt="Product image here" >
          </div>
            <h5>{{$sdata->name}}</h5>
            <h6>Nu. {{$sdata->price}}</h6>
            <h6>{{$sdata->detail}}</h6>
            <div class="third mt-4"> 
                            <a href="/front/saledetail/{{$sdata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> View Details</a>
                        </div>
          @endforeach
            
          </div>
        </div>

        <div class="product-card text-center col-sm">
        <h3>Donation Products</h3>
          <div class="product-image">
          @foreach($dondata as $i => $ddata)
          <div class="product-info">
              <img src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Product image here" >
          </div>
            <h5>{{$ddata->name}}</h5>
            <h6>{{$ddata->detail}}</h6>
            <div class="third mt-4"> 
                            <a href="/front/donationdetail/{{$ddata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> View Details</a>
                        </div>

          @endforeach
          </div>
        </div>
    </div>
      </section>

@endsection