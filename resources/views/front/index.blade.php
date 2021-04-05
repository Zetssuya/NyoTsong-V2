<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
{{-- Hero Image --}}
<div class="hero-image">
    <img src="{{asset('assets/img/hero_img.svg')}}">
    <div class="hero-text">
      <h1 style="font-size:50px">Welcome to NyoTsong</h1>
      <h5>Bhutan's Largest Online Buying and Selling Marketplace</h5>
    </div>
</div>
{{-- Search Bar --}}
<form class="p-3">
    <div class="col-10 col-md-8 container">
        <input id="search-bar" placeholder="search by product name">
        <button id="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
</form>

{{-- slide bar --}}
@include('front.layouts.slider')
@include('front.layouts.product_display')

@endsection