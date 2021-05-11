<link href="{{ asset('assets/css/product_display.css') }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong&effect=emboss">
@extends('front.layouts.master')
@section('content')
{{-- SVG Image --}}
<style>
    body {
      background-image:  
      url('/assets/img/feedback.svg');
      background-repeat: no-repeat;
      background-position: top;
    }
</style>
{{-- End of SVG Image --}}


@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif 

<!-- Feedback system -->
<center>
<div  class="border-info"  style="margin-top: 50px;
                            width: 50%;
                            background-color: #fff;
                            border: 4px solid #702169;
                            border-radius: 0px 0px 40px 0px;
                            box-shadow: -13px -9px 19px -8px rgba(132,40,133,0.7);
                            -webkit-box-shadow: -13px -9px 19px -8px rgba(132,40,133,0.7);
                            -moz-box-shadow: -13px -9px 19px -8px rgba(132,40,133,0.7);">
    <div class="modal-body text-center border" >
    <div class="h3 font-weight-bold mb-4" style="color: rgb(101, 33, 156);">
            We would love to hear from you
    </div>
            <form  method="post" action="{{ action('FeedbackSystemController@store')}}">
            @csrf
            <div>
            <textarea class="description" name="feedback" placeholder="feedbacks here" type="text" style="
                    align-content: center;
                    width: 60%;
                    border: 2px solid rgb(90, 13, 134)">
            </textarea>
            </div><br/>
            <button type="submit" class="btn btn-outline-info text-dark">Send Feedback</button>
            </form>
    </div>
</div>
</center>
    {{-- <div class="container" >
        <div style="margin-top: 30px" class="col-md-3 column">
            @foreach($feedbacks as $i => $feed)
            <div class="card mb-3">
                <style scoped>
                    .card {
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        transition: 0.3s;
                        width: 100%;
                        display: flex;
                                    align-items: flex-end;
                                    height: 70%;
                        }
                        .card:hover {
                          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                        }
                        .container {
                          padding: 2px 16px;
                        }
                </style>
                <div class="container">
                  <p>{{$feed->feedback}}</p>
                </div>
            </div>
        @endforeach
        </div>

</div> --}}

<div class = "container" >
    <div class = "products">
    <div class="row" >
        @foreach($feedbacks as $i => $feed)
        <div id="saleproduct" class="col-md-3" >
        <div class = "product-items" >
            <div class = "product" >
            <div class = "product-content" style="width: 250px;
                                                background-color: rgb(30, 29, 31);
                                                color: #fff;
                                                box-shadow: -13px -9px 19px -8px rgba(132,40,133,0.7);">
                    <div class ="product-info-top">
                        <h2 class = "sm-title font-effect-emboss" style="font-family: Trirong, sans-serif;">{{$feed->feedback}}</h2>
                    </div>
            </div>
            </div>    
            </div>
        </div>
        @endforeach
        </div>
    </div>  
    </div>

@endsection

