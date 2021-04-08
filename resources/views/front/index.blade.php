<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

{{-- Search-bar and NyoTsong heading --}}
<div class="container-fluid">
<div class="hero-search-container">
  <div class="text-center text-md-left">
      <h1 class="h1 font-weight-bold mb-4">NyoTsong:Market of possibilities</h1>
      <form class="search-box-container large">
          <input placeholder="Search by product name" value class="no-shadow border-0 form-control form-control-lg pac-taregt-input">
          <button type="submit" class="btn button-search-box btn-round btn-success">
            <svg width="32px" height="23px" viewBox="0 0 32 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class=""><g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-810.000000, -407.000000)"><g id="Hero-Search" transform="translate(151.000000, 313.000000)"><g id="Search-box" transform="translate(0.000000, 63.000000)"><g id="Button" transform="translate(641.000000, 8.000000)"><g id="left-arrow" transform="translate(34.000000, 34.500000) scale(-1, 1) translate(-34.000000, -34.500000) translate(18.000000, 23.000000)" fill="#FFFFFF" fill-rule="nonzero"><path d="M10.273,1.009 C10.717,0.565 11.416,0.565 11.86,1.009 C12.289,1.438 12.289,2.152 11.86,2.58 L3.813,10.627 L30.367,10.627 C30.986,10.627 31.494,11.119 31.494,11.738 C31.494,12.357 30.986,12.865 30.367,12.865 L3.813,12.865 L11.86,20.897 C12.289,21.341 12.289,22.056 11.86,22.484 C11.416,22.928 10.717,22.928 10.273,22.484 L0.321,12.532 C-0.108,12.103 -0.108,11.389 0.321,10.961 L10.273,1.009 Z" id="Path"></path></g></g></g></g></g></g></svg>
          </button>
      </form>
  </div>
</div>
</div>
@include('front.layouts.product_display')
@endsection