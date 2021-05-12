<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

<div class = "container">
  <div class = "products">
      <h3 class = "lg-title">Products nearby me</h3>
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
                  @if($sdata->status)
                  <a class = "product-name">Status: {{$sdata->status}}</a>
                  @endif
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
                @if($ddata->status)
                  <a class = "product-name">Status: {{$ddata->status}}</a>
                  @endif
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

@endsection