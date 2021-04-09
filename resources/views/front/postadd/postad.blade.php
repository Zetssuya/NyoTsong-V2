@extends('front.layouts.master')
@section('content')

<link href="{{ asset('/css/postad.css') }}" rel="stylesheet">
<div class="content-middle">
	{{-- SVG Image --}}
	<style>
		body {
		  background-image: url('/assets/img/onlinead.svg');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: 70% 70%;
		  background-position: right;
		}
		</style>
		<br>
	{{-- End of SVG Image --}}
		<div>
			<h2 class="page-title">Post an Ad</h2>
		</div>
		<br>
	
	{{-- Ads posting for sale and donation	 --}}
		<div class="postad">
			{{-- <div class="">
				<a href="{!! url('/front/postadd/sale') !!}" class="btn btn-primary">I want to sell <i class="fa fa-plus"></i></a>
			</div> --}}
			{{-- test --}}
			<div class="container" >
				<a href="{!! url('/front/postadd/sale') !!}" class="button">sell</a>
			</div>
			{{-- test end  --}}

			<div class="container" >
				<a href="{!! url('/front/postadd/donation') !!}" class="button second">donate</a>
			</div>
			{{-- <br>
			<div class="">
				<a href="{!! url('/front/postadd/donation') !!}" class="btn btn-primary">I want to donate <i class="fa fa-plus"></i></a>
			</div> --}}
		</div> 
	{{--End of  Ads posting for sale and donation	 --}}      
</div>
@endsection