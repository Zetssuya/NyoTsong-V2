<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

{{-- Hero content--}}
<div class="hero-image">
    <div class="hero-text">
      <h1 class="h1 font-weight-bold mb-4">Welcome to NyoTsong</h1>
      <h4 class="font-weight-bold mb-4">Bhutan's Online Buying and Selling Marketplace</h5>
    </div>
</div>
{{-- Search Bar --}}
<div>
<form class="search-box-container large mb-5">
    <input placeholder="Search by product name" value class="no-shadow border-0 form-control form-control-lg pac-taregt-input" autocomplete="off">
    <button type="submit" class="btn button-search-box btn-round btn-success">
    </button>
</form>
</div>
{{-- slide bar --}}
@include('front.layouts.slider')
@include('front.layouts.product_display')


@endsection