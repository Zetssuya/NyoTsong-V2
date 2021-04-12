@extends('admin.layouts.master')
@section('page')
    Product Category
@endsection

@section('content')
@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif
<div class="container">
	<div class="page-header">
		<div class="">
			<a href="{!! url('/admin/categories/addcategory') !!}" class="btn btn-dark">Add new category <i class="fa fa-plus"></i></a>
		</div>
		<h2>Categories</h2>
       
	</div>
	@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
	@endif
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Name</th>                           
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categories as $i => $category)
            <tr>
                <td class="text-center-justified width-100">{{$category->category}}</td>                
                <td class="text-center">
                <a class="btn btn-danger ti-close" href="/admin/categories/delete/{{$category->id}}" title="Delete Category" onclick="return confirm('Are you sure? You will not be able to recover this.')" > Delete</a>                                  
            </td>
            </tr>
             @endforeach
            </tbody>
        </table>
         {{ $categories->links() }}
    </div>
    
</div>

</div>


@endsection