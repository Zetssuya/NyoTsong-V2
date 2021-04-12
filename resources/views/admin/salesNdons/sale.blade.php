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
         
        <table id="data-table" class="table table-striped">
            <thead>
            <tr>
                <th>User Id</th>  
                <th>Name</th> 
                <th>Category</th> 
                <th>Price</th> 
                <th>Detail</th> 
                <th>Image</th> 
                <th>Location</th> 
                <th >Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($saledata as $i => $sdata)
            <tr>
                <td >{{$sdata->user_id}}</td> 
                <td >{{$sdata->name}}</td>                
                <td >{{$sdata->categories}}</td>  
                <td >{{$sdata->price}}</td> 
                <td >{{$sdata->detail}}</td>                    
                <td ><img height = "50px" src="{{ url('/uploads/') . '/' . $sdata->image }}"></td>                
                <td >{{$sdata->location}}</td>                  
                <td >
                <a class="btn btn-danger ti-close" href="/admin/salesNdons/saledelete/{{$sdata->id}}" title="Delete Product" onclick="return confirm('Are you sure? You will not be able to recover this.')" > Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
       
    </div>
    {{-- <div class="clearfix"></div> --}}
</div>

</div>
@endsection