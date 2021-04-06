@extends('admin.layouts.master')

@section('page')
    Sales Products
@endsection

@section('content')

<div class="container">
	<div class="page-header">
		<h2>Products for Sale</h2>
	</div>
	@if(Session::has('flash_message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            {{ Session::get('flash_message') }}
		</div>
	@endif
    @if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif  
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>User Id</th>  
                <th>Name</th> 
                <th>Category</th> 
                <th>Price</th> 
                <th>Detail</th> 
                <th>Image</th> 
                <th>Location</th> 
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($saledata as $i => $sdata)
            <tr>
                <td class="text-center-justified width-100">{{$sdata->user_id}}</td> 
                <td class="text-center-justified width-100">{{$sdata->name}}</td>                
                <td class="text-center-justified width-100">{{$sdata->categories}}</td>  
                <td class="text-center-justified width-100">{{$sdata->price}}</td> 
                <td class="text-center-justified width-100">{{$sdata->detail}}</td>                    
                <td class="text-center-justified width-100"><img height = "50px" src="{{ url('/uploads/') . '/' . $sdata->image }}"></td>                
                <td class="text-center-justified width-100">{{$sdata->location}}</td>                  
                <td class="text-center">
                <a class="btn btn-danger ti-close" href="/admin/salesNdons/delete/{{$sdata->id}}" title="Delete Product" onclick="return confirm('Are you sure? You will not be able to recover this.')" > Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
       
    </div>
    <div class="clearfix"></div>
</div>

</div>
@endsection