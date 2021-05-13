<link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
@extends('front.layouts.master')
@section('content')
<style>
    body{
        background-image: url('/assets/img/about.svg');
        background-position: right;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 45%;
    }
</style>

<div class="aboutus-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="aboutus">
                    <h2 class="aboutus-title">About NyoTsong</h2>
                    <p class="aboutus-text">NyoTsong is a progressive web app developed by FInal Year students from IT Department of College of Science and Technology. It is a progressive web app developed for second-hand buying and selling industry in Bhutan.</p>
                    <p class="aboutus-text"></p>
                    <a class="aboutus-more" href="#">contact us</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
