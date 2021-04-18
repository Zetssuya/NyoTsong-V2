<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')

	<!-- {{-- SVG Image --}} -->
	<style>
		body {
		  background-image: url('/assets/img/homepage_wave.svg');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: 100%;
		  background-position: top right;
		}
		</style>
		<br>
	<!-- {{-- End of SVG Image --}} -->

<!-- {{-- Search-bar and NyoTsong heading --}} -->
<div class="container">
<div class="hero-search-container">
  <div class="text-center text-md-left">
      <h1 class="h1 font-weight-bold mb-4">NyoTsong:market of possibilities</h1>
      <form class="search-box-container large" action="{{ action('Front\HomeController@searches')}}" method="POST" role="search">
	  @csrf
          <input placeholder="Search by product name" name="search" class="no-shadow border-0 form-control form-control-lg pac-taregt-input">
          <button type="submit" class="btn button-search-box btn-round btn-success fa fa-search">
          </button>
      </form>
  </div>
</div>
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif
<!-- Search Results -->
<div class="container">
    @if(isset($saleresult) OR isset($donresult))
        <p> The Search results for your query <b> {{ $search }} </b> are :</p>

	<div class="container">
	<div class="row">
		
			<div class="position-relative col-sm">
			@foreach($saleresult as $sres)
					<article class="card-article d-flex flex-column text-center mb-4">
					<div class="card-article d-flex flex-column text-center">
						<div class="category text-success h6 mb-3">
						<div>{{$sres->name}}</div>
						</div>
						<img src="{{ url('/uploads/') . '/' . $sres->image }}" alt="Products for sale" class="img-fluid card-img-top">
						<h4 class="font-weight-bold mb-3">
						<span>Nu. {{$sres->price}}</span>
						</h4>
						<div class="description mb-3">
						{{$sres->detail}}
						</div>
						<span class="text-success h6"> <a href="/front/saledetail/{{$sres->id}}" class="text-success h6">
						View details </a></span>
					</div>
					</article>
					@endforeach
			</div>
			
			<div class="position-relative col-sm">
			@foreach($donresult as $dres)
				<article class="card-article d-flex flex-column text-center mb-4">
				<div class="card-article d-flex flex-column text-center">
				<div class="category text-success h6 mb-3">
					<div>{{$dres->name}}</div>
				</div>
				<img src="{{ url('/uploads/') . '/' . $dres->image }}" alt="Products for donation" class="img-fluid card-img-top">
				<div class="description mb-3">
					{{$dres->detail}}
				</div>
				<span class="text-success h6"> 
					<a href="/front/donationdetail/{{$dres->id}}" class="text-success h6">
					View details </a></span>
				</article>
				@endforeach
				</div>
		
			
		</div>
	</div>
    @endif

</div>
</div>

<!-- {{-- End of Search-bar and NyoTsong heading --}} -->

@include('front.layouts.product_display')
@endsection