<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
@extends('front.layouts.master')

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
@section('content')
{{-- slide bar --}}
@include('front.layouts.slider')
@include('front.layouts.product_display')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
@endsection