@extends('front.layouts.master')

@section('content')

<div class="page-header">
		<div class="">
			<a href="{!! url('/front/postadd/sale') !!}" class="btn btn-primary">For Sale <i class="fa fa-plus"></i></a>
		</div>
        <div class="">
			<a href="{!! url('/front/postadd/donation') !!}" class="btn btn-primary">For Donation <i class="fa fa-plus"></i></a>
		</div>
		<h2>Post an Ad</h2>
       
</div>

@endsection