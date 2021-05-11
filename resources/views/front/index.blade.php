<link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
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
		
			{{-- <div class="position-relative col-sm">
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
			</div> --}}

			@foreach($saleresult as $sres)
			<div class="col-md-3">
			<div class = "product-items">
				<!-- single product -->
				<div class = "product">
					<div class = "product-content">
						<div class = "product-img">
							<img src="{{ url('/uploads/') . '/' . $sres->image }}" alt = "product image" height="200px" width="100%">
						</div>
					</div>
	  
					<div class = "product-info">
						<div class = "product-info-top">
							<h2 class = "sm-title justify-text-center">{{$sres->name}}</h2>
						</div>
						<a class = "product-name">Nu. {{$sres->price}}</a>
						<p class = "product-price">{{$sres->detail}}</p>
						<a href="/front/saledetail/{{$sres->id}}" class="text-success product-name">
						  View details </a>
					</div>
	  
					<div class = "off-info">
						<h2 class = "sm-title">{{$sres->negotiation}}</h2>
					   
					</div>
					
				</div>
			  </div>
			</div>
			@endforeach


			
			{{-- <div class="position-relative col-sm">
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
				</div> --}}
		    <!--Products for donation -->
				@foreach($donresult as $dres)
				<div class="col-md-3">
				<div class = "product-items">
					<!-- single product -->
					<div class = "product">
						<div class = "product-content">
							<div class = "product-img">
								<img src="{{ url('/uploads/') . '/' . $dres->image }}" alt="Products for donation" height="200px" width="100%">
							</div>
						</div>
			
						<div class = "product-info">
							<div class = "product-info-top">
								<h2 class = "sm-title justify-text-center">Item name: {{$dres->name}}</h2>
							</div>
							<p class = "product-price">Item description: {{$dres->detail}}</p>
							<a href="/front/donationdetail/{{$dres->id}}" class="text-success product-name">
							  View details </a>
						</div> 
					</div>
				  </div>
				</div>
				  @endforeach
				</div>
			
		</div>
	</div>
    @endif

</div>
</div>

<!-- {{-- End of Search-bar and NyoTsong heading --}} -->

@include('front.layouts.product_display')
@include('front.layouts.footer')
@endsection

