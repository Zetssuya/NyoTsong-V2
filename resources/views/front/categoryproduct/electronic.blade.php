<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

{{-- <section class="products">
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
            <h6>{{$sdata->negotiation}}</h6>
            <h6>{{$sdata->detail}}</h6>
            <div class="third mt-4"> 
                            <a href="/front/saledetail/{{$sdata->id}}" title="Edit Product" class="btn btn-success">
                            <i class="fa fa-cogs"></i> View Details</a>
                        </div>
          @endforeach
            
          </div>
        </div>

    </div>
      </section> --}}
       <!--Products for sale -->
       <div class = "products">
        <div class = "container">
          <h1 class = "lg-title">Electronics for sale</h1>
          <div class="row">
      
          <!--Products for sale -->
            @foreach($saledata as $i => $sdata)
            <div class="col-md-3">
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

@endsection