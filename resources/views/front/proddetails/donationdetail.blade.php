@extends('front.layouts.master')
@section('content')

<div class="container flex-row mt-4">
    <h1 class="border mb-4 heading">Product Detail</h1>
</div>
<div class="product-card text-center col-sm" >
          <div class="product-image">
          
          <div class="product-info">
              <img  src="{{ url('/uploads/') . '/' . $dondata->image }}" alt="Product image here" >
          </div>
            <h5>{{$dondata->name}}</h5>
            <h6>{{$dondata->detail}}</h6>          
            <h6>{{$dondata->location}}</h6>        
          </div>
</div>

<div class="container flex-row mt-4">
    <h1 class="border mb-4 heading">User Detail</h1>
</div>
<div class="second d-flex flex-row mt-2">
            <div class="image mr-3"> <img src="{{ url('/uploads/') . '/' . $user->image }}" class="rounded-circle" width="80" /> </div>
                <div class="">
                    <div class="d-flex flex-row mb-1"><span>Name: <strong>{{$user->name}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>E-mail: <strong>{{$user->email}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Contact No.:<strong> {{$user->contact_no}}</strong></span>
                    </div>
                    <div class="d-flex flex-row mb-1"> <span>Location:<strong> {{$user->location}}</strong></span>
                    </div>
                </div>
        </div>

@endsection