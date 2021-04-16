<link href="{{ asset('/css/sale.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
    <style>
    body{
        background-image: 
        url('/assets/img/blue_wave.svg'),
        url('/assets/img/red_wave.svg');
        background-position: 
        right,
        left;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 
        20%,
        7%;
    }
</style>
<div class="col-sm-12 col-md-8 col-lg-12 row justify-content-center mt-4 container">
<div class="row page-content col-md-9 col-11">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
    <h2 class="font-weight-bold mb-5">
        Ads detail
    </h2>
</div>
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <small>{{ $message }}</small>
    </div>
    <br>
@endif


<form action="{{ action('SaleController@store')}}" method="POST" enctype="multipart/form-data" class="myForm">
    @csrf

    {{-- Product Name --}}
        <div class="dashboard-wrapper">
        <div class="pl-lg-2 col-lg-10 col-8 mb-4">
            <label class="form-text text-muted" required>
                Product name
            </label>
        <input class="form-control" name="name" placeholder="Enter product name" autocomplete="off" type="text" aria-label="Product name">
        <span class="text-danger">{{$errors->first('name')}}</span>

        </div>

        {{-- Select Category --}}
        <div class="pl-lg-2 col-lg-10 col-8">
            <label class="form-text text-muted">
                Product category
            </label>
        <div class="tg-select form-control mb-4">
        <select name="categories" required>
            <option value="">Select category</option>
                @foreach($categories as $i => $category)
                    <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach

        </select>
        </div>
        </div>

        {{-- Select Price --}}
        <div class="pl-lg-2 col-lg-10 col-8">
            <label class="form-text text-muted" required>
                Product price
            </label>
        <input class="form-control" name="price" placeholder="Enter product price" type="text">
        <span class="text-danger">{{$errors->first('price')}}</span>
        </div>

        {{-- Enter product Details --}}
        <div class="pl-lg-2 col-lg-10 col-8 mb-4">
            <label class="form-text text-muted" required>
               Product description
            </label>
        <textarea class="form-control description" name="detail" placeholder="Enter product description" type="text"></textarea>
        <span class="text-danger">{{$errors->first('detail')}}</span>
        </div>

        {{-- Select Product Image --}}
        <div class="pl-lg-2 col-lg-10 col-8 mb-4 ">
            <label class="form-text text-muted">
                Select product image
            </label>
        <input id="tg-photogallery" class="tg-fileinput form-control" type="file" name="image" value="" required>
        </div>
        </div>
        </div>
        </div>

    {{-- Location in next col --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
    <div class="inner-box mb-4">
    <div class="tg-contactdetail">
        <h2 class="font-weight-bold">
            Location detail
        </h2>
        <div class="pl-lg-2 col-lg-6 col-8">
            <label class="form-text text-muted required">
                Product location
             </label>
        <div>
            <select name="location" class="pl-lg-3 location form-control" required>
            <option value="">Select location</option>
            @foreach($locations as $i => $location)
                <option value="{{$location->location}}">{{$location->location}}</option>
            @endforeach
            </select>
        </div>
        </div>
    </div>
    </div>
    
            <div class="tg-checkbox mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input required" value="" id="tg-agreetermsandrules" required>
                    <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all NyoTsong <a href="javascript:void(0);">Product Guidelines &amp; Conditions</a></label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-success btn-lg" data-mdb-ripple-color="#d8caca" style="background-color:#169235"> Post Ad</button>
            </div>
            
           
    </form>
    </div>
    {{-- End of second column --}}

    </div>
    </div>

@endsection
