@extends('front.layouts.master')
@section('content')

@if ( $errors->any() )
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif

<div class="col-sm-12 col-md-8 col-lg-12 row justify-content-center mt-4 container">
    <div class="page-content col-md-9 col-11">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="font-weight-bold mb-3">
                        Edit Your Product
                    </h2>
                </div>

                <form method="POST" action="/front/profile/updateproduct/{{$proddata->id}}" enctype="multipart/form-data" class="profile-form border border-info form-shadow">
                @csrf
                @method('PUT')
                <div class="dashboard-wrapper">
        
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <label class="form-text text-muted ">
                        Select product image
                    </label>
                         <input id="tg-photogallery" class="tg-fileinput form-control" type="file" name="image">
                </div>
                
                <div class="pl-lg-2 col-lg-10 col-8 mb-2 {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" name="name" placeholder="Product Name" id="name" class="form-control">
                    @if ($errors->has('name'))
                        
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>

                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                <select name="categories" class="pl-lg-3 categories form-control">
                    <option value="none">Select Category</option>
                            @foreach($categories as $i => $category)
                            <option value="{{$category->category}}">{{$category->category}}</option>
                            @endforeach
                    </select>
                </div>
                
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <div>
                    <input class="form-control" name="price" placeholder="Enter product price" type="text">
                    </div>
                </div>
                
                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <div>
                    <textarea class="form-control description" name="detail" placeholder="Enter product description" type="text"></textarea>
                    </div>
                </div>

                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <div>
                    <select name="location" class="pl-lg-3 location form-control">
                        <option value="none">Select location</option>
                        @foreach($locations as $i => $location)
                            <option value="{{$location->location}}">{{$location->location}}</option>
                        @endforeach
                        </select>
                        </div>
                </div>

                <div class="pl-lg-2 col-lg-10 col-8 mb-2">
                    <button type="submit" class="btn btn-info btn-lg btn-rounded">
                         Update Product details </button>
                </div>
                </div>
                </form>
            </div>
            </div>
        </div>
</div>

@endsection