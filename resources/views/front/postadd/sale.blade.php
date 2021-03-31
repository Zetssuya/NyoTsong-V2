@extends('front.layouts.master')

@section('content')

<div class="col-sm-12 col-md-8 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Ads Detail</h2>
</div>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif
<form action="{{ action('SaleController@store')}}" method="POST" accept-charset="utf-8">
@csrf

    <div class="dashboard-wrapper">
    <div class="form-group mb-3">
    <label class="control-label">Product Name</label>
    <input class="form-control input-md" name="name" placeholder="Enter product name" autofocus type="text">
    <span class="text-danger">{{$errors->first('name')}}</span>
    </div>
    <div class="form-group mb-3 tg-inputwithicon">
    <label class="control-label">Categories</label>
    <div class="tg-select form-control">
    <select>
    
    <option value="none">Select Category</option>
    @foreach($categories as $i => $category)
        <option value="{{$category->id}}">{{$category->category}}</option>
    @endforeach
    <!-- <option value="none">Electronics</option>
    <option value="none">Land</option>
    <option value="none">Vehicles</option> -->
    </select>
    </div>
    </div>
    <div class="form-group mb-3">
    <label class="control-label">Product Price</label>
    <input class="form-control input-md" name="price" placeholder="Enter product price" type="text">
    <span class="text-danger">{{$errors->first('price')}}</span>
    <div class="tg-checkbox mt-3">
    </div>
    </div>

    <div class="form-group-lg md-3">
    <label class="control-label">Product Detail</label>
    <textarea class="form-control input-md" name="detail" placeholder="Enter product Details" type="text"></textarea>
    <span class="text-danger">{{$errors->first('detail')}}</span>
    <div class="tg-checkbox mt-3">
    </div>

    </div>
    <div class="form-group md-3">
    </section>
    </div>
    <label class="tg-fileuploadlabel" for="tg-photogallery">
    <span>Drop files anywhere to upload</span>
    <span>Or</span>
    <span class="btn btn-common">Select Files</span>
    <span>Maximum upload file size: 5 MB</span>
    <input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
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
   
    <div class="form-group-lg md-3">
    <label class="control-label">Enter product address</label>
    <input class="form-control input-md" name="address" placeholder="e.g. Babesa, Thimphu" type="text"></input>
    <span class="text-danger">{{$errors->first('address')}}</span>
    <div class="tg-checkbox mt-3">
    </div>
    </div>
    </div>
    </div>
    
    <div class="tg-checkbox">
    <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
    <label class="custom-control-label" for="tg-agreetermsandrules">I agree to all NyoTsong <a href="javascript:void(0);">Privacy Terms &amp; Conditions</a></label>
    </div>
    </div>
    <div class="form-group">
    <button class="btn btn-common" type="submit">Post Ad</button>
    </div>
    
    </div>
    </div>
    </div>

@endsection