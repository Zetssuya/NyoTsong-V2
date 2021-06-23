<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

<div class = "products">
  <div class = "container">
    <h1 class = "lg-title">Products for sale</h1>
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
                  <a class = "product-name">Quantity: {{$sdata->quantity}}</a>
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
 {{ $saledata->links() }}
@endsection