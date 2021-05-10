<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

<div class = "products">
  <div class = "container">
    <h1 class = "lg-title">Items for donation</h1>
    <div class="row">
    <!--Products for donation -->
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
    {{ $dondata->links() }}
    @endsection
