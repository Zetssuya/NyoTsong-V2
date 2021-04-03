<link href="{{ asset('/css/sale.css') }}" rel="stylesheet">
@extends('front.layouts.master')

@section('content')

<div class="col-sm-12 col-md-8 col-lg-9 myCard">
    <style>
        body {
        background-image: url('/assets/img/product_sale.svg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 55% 55%;
        background-position: right;
        }
    </style>
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
    <br>
    <h2 class="dashbord-title">Ads Detail</h2>
</div>
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif


<form action="{{ action('SaleController@store')}}" method="POST" enctype="multipart/form-data" class="myForm">
    @csrf

    <div class="dashboard-wrapper">
    <div class="form-group mb-3">
    <label class="control-label">Product Name</label>
    <input class="myInput" name="name" placeholder="Enter product name" autofocus type="text">
    <span class="text-danger">{{$errors->first('name')}}</span>
    </div>

    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Categories</label>
    <div class="tg-select form-control">
    <select name="categories" class="form-select" required>
        <option value="none">Select Category</option>
            @foreach($categories as $i => $category)
                 <option value="{{$category->category}}">{{$category->category}}</option>
            @endforeach

    </select>
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Product Price</label>
    <input class="myInput" name="price" placeholder="Enter product price" type="text">
    <span class="text-danger">{{$errors->first('price')}}</span>
    <div class="tg-checkbox mt-3">
    </div>
    </div>

    <div class="form-group-lg md-3">
    <label class="control-label">Product Detail</label>
    <textarea class="myInputProduct" name="detail" placeholder="Enter product details" type="text"></textarea>
    <span class="text-danger">{{$errors->first('detail')}}</span>
    <div class="tg-checkbox mt-3">
    </div>

    </div>
    <div class="form-group md-3">
    </section>
    </div>
    <label class="tg-fileuploadlabel" for="tg-photogallery">
    <span class="btn btn-common">Select Product Image</span>
    <input id="tg-photogallery" class="tg-fileinput" type="file" name="image">
    </label>
    </div>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
    <div class="inner-box">
    <div class="tg-contactdetail">
    <div class="dashboard-box">
    <h2 class="dashbord-title">Location Detail</h2>
    </div>
    <div class="dashboard-wrapper">
    <div class="form-group mb-3">

    </div>
    </div>
   
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Location of Product</label>
    <div class="tg-select form-control">
    <select name="location" class="form-select" required>
    
    <option value="none">Select Product Location</option>
    @foreach($locations as $i => $location)
        <option value="{{$location->location}}">{{$location->location}}</option>
    @endforeach
    </select>
    </div>
    </div>
    </div>
    </div>
    
    <div class="tg-checkbox">
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
    <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all NyoTsong <a href="javascript:void(0);">Product Guidelines &amp; Conditions</a></label>
    </div>
    </div>
    <div class="form-group">
    <button class="btn btn-common" type="submit">Post Ad</button>
    </div>
    </form>
    </div>
    </div>
    </div>

@endsection