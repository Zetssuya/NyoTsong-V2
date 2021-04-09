@extends('front.layouts.master')

@section('content')

<h1>My Ads</h1>
<hr/>

<div class="container">
<div class="row">

<div class="col-sm">
<h3>For Sale</h3>
@foreach($saledata as $i => $sdata)
          <div class="product-image">
            <div class="product-info">
                <img  height = "200px" src="{{ url('/uploads/') . '/' . $sdata->image }}" alt="Product image here" >
            </div>
                <h5>{{$sdata->name}}</h5>
                <h6>{{$sdata->categories}}</h6>
                <h6>{{$sdata->price}}</h6>
                <h6>{{$sdata->detail}}</h6>
                <h6>{{$sdata->location}}</h6>
                <hr>
          </div>
          @endforeach
          <!-- {{ $saledata->links() }} -->
</div>
<div class="col-cm">
<h3>For Donation</h3>
@foreach($dondata as $i => $ddata)
          <div class="product-image">
            <div class="product-info">
                <img  height = "200px" src="{{ url('/uploads/') . '/' . $ddata->image }}" alt="Product image here" >
            </div>
                <h5>{{$ddata->name}}</h5>
                <h6>{{$ddata->detail}}</h6>
                <h6>{{$ddata->location}}</h6>
                <hr>
          </div>
          @endforeach
          <!-- {{ $dondata->links() }} -->

</div>
</div>

</div>

@endsection