<link href="{{ asset('/css/sale.css') }}" rel="stylesheet">
@extends('front.layouts.master')

@section('content')

<div class="col-sm-12 col-md-8 col-lg-9 sale">
    <style>
        body {
        background-image: url('/assets/img/product_sale.svg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 55% 55%;
        background-position: right;
        }
    </style>
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
        <div class="pl-lg-2 col-lg-10 col-8">
            <small class="form-text text-muted">
                Product name
            </small>
        <input class="form-control" name="name" placeholder="Enter product name" autocomplete="off" type="text" aria-label="Product name">
        <span class="text-danger">{{$errors->first('name')}}</span>

        </div>

        {{-- Select Category --}}
        <div class="pl-lg-2 col-lg-10 col-8">
            <small class="form-text text-muted">
                Product category
            </small>
        <div class="tg-select form-control">
        <select name="categories" required>
            <option value="none">Select category</option>
                @foreach($categories as $i => $category)
                    <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach

        </select>
        </div>
        </div>

        {{-- Select Price --}}
        <div class="pl-lg-2 col-lg-10 col-8">
            <small class="form-text text-muted">
                Product price
            </small>
        <input class="form-control" name="price" placeholder="Enter product price" type="text">
        <span class="text-danger">{{$errors->first('price')}}</span>
        </div>

        {{-- Enter product Details --}}
        <div class="pl-lg-2 col-lg-10 col-8">
            <small class="form-text text-muted">
               Product description
            </small>
        <textarea class="form-control description" name="detail" placeholder="Enter product description" type="text"></textarea>
        <span class="text-danger">{{$errors->first('detail')}}</span>
        </div>

        {{-- Select Product Image --}}
        <div class="pl-lg-2 col-lg-10 col-8">
            <small class="form-text text-muted">
                Select product image
             </small>
        <input id="tg-photogallery" class="tg-fileinput" type="file" name="image">
        </div>
        </div>
        </div>
        </div>

    {{-- Location in next col --}}
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
    <div class="inner-box">
    <div class="tg-contactdetail">
        <h2 class="font-weight-bold mb-5">
            Location detail
        </h2>
        <div class="pl-lg-2 col-lg-10 col-8">
            <small class="form-text text-muted">
                Product location
             </small>
        <div>
            <select name="location" class="pl-lg-2 col-lg-12 col-8" required>
            <option value="none">Select location</option>
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
                    <label class="custom-control-label required" for="tg-agreetermsandrules">I agree to all NyoTsong <a href="javascript:void(0);">Product Guidelines &amp; Conditions</a></label>
                </div>
            </div>
            <div>
                <button class="btn-nav" type="submit">
                    <span class="label">
                        Post Ad
                    </span>
                </button>
            </div>
    </form>
    </div>
    {{-- End of second column --}}

    </div>
    </div>

@endsection