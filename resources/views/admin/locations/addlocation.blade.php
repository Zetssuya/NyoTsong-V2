@extends('admin.layouts.master')


@section('content')

    <div class="row">
        <div class="col-lg-10 col-md-10">
            @include('admin.layouts.message')
            @if ( $errors->any() )

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Location</h4>
                </div>

                <div class="content">
                    <form method="POST" action="{{ action('LocationController@store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for ="$cate">Add Location</label>
                            <input type="text" id="cate" class="form-control" name="location">
                            <span class="text-danger">{{ $errors->has('location') ? $errors->first('location') : '' }}</span>
                        </div>

                            <div class="form-group">
                            <button class="btn btn-success" type="submit">ADD</button>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection