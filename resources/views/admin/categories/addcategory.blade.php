@extends('admin.layouts.master')
@section('page')
    Product Category
@endsection

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
                    <h4 class="title">Add Product Category</h4>
                </div>

                <div class="content">
                    <form method="POST" action="{{ action('CategoryController@store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            @include('admin.categories._fields')

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