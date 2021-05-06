@extends('front.layouts.master')
@section('content')

<div class="container flex-row mt-4">
    <h1 class="border mb-4 heading">Latest Sale Products</h1>
<div class="row">

<section class="products">
    <div class="row">
    
    <div class="product-card text-center col-sm" >
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
 {{ $saledata->links() }}
    </div>
      </section>

@endsection