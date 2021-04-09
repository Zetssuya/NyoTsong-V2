<link href="{{ asset('/css/sale.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
<style>
    body {
      background-image: url('/assets/img/donate.svg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 60% 60%;
      background-position: center;
    }
</style>
<div class="col-sm-12 col-md-8 col-lg-12 row justify-content-center mt-4 container">
<div class="row page-content col-md-9 col-11">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
    <h2 class="font-weight-bold mb-5">
        Donation Details
    </h2>
</div>
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <small>{{ $message }}</small>
    </div>
    <br>
@endif

<form action="{{ action('DonationController@store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Item Name --}}
    <div class="dashboard-wrapper">
    <div class="pl-lg-2 col-lg-10 col-8 mb-4">
        <label class="form-text text-muted">
            Item Name
        </label>
    <input class="form-control" name="name" placeholder="Enter item name" type="text" autocomplete="off" aria-label="Item name">
    <span class="text-danger">{{$errors->first('name')}}</span>
    </div>

    {{-- Item Details --}}
    <div class="pl-lg-2 col-lg-10 col-8 mb-4">
        <label class="form-text text-muted">
            Item description
         </label>
    <textarea class="form-control description" name="detail" placeholder="Enter item description" type="text"></textarea>
    <span class="text-danger">{{$errors->first('detail')}}</span>
    </div>
    </div>

    {{-- Select Product Image --}}
    <div class="pl-lg-2 col-lg-10 col-8 mb-4 ">
        <label class="form-text text-muted ">
            Select item image
        </label>
        <input id="tg-photogallery" class="tg-fileinput form-control" type="file" name="image">
    </div>
    </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
    <div class="inner-box mb-4">
        <div class="tg-contactdetail">
            <h2 class="font-weight-bold">
                Location detail
            </h2>
            <div class="pl-lg-2 col-lg-6 col-8">
                <label class="form-text text-muted">
                    Product location
                 </label>
            <div>
                <select name="location" class="pl-lg-3 location form-control" required>
                <option value="none">Select location</option>
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
            <input type="checkbox" class="custom-control-input" id="tg-agreetermsandrules">
            <label class="custom-control-label required" for="tg-agreetermsandrules">I agree to all NyoTsong <a href="javascript:void(0);">Product Guidelines &amp; Conditions</a></label>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-success btn-lg" data-mdb-ripple-color="#d8caca" style="background-color:#169235"> Post for donation</button>
    </div>
    </form>
    </div>
    </div>
    </div>
@endsection