@extends('admin.layouts.master')
@section('page')
    Product Location
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
		<div class="pull-right">
			<a href="{!! url('/admin/locations/addlocation') !!}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
		</div>
		<h2>Locations</h2>
       
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
            @foreach($locations as $i => $location)
            <tr>
                <td class="text-center-justified width-100">{{$location->location}}</td>                
                <td class="text-center">
                <a class="btn btn-danger ti-close" href="/admin/locations/delete/{{$location->id}}" title="Delete Location" onclick="return confirm('Are you sure? You will not be able to recover this.')" > Delete</a>                                  
                
            </td>
            </tr>
             @endforeach
            </tbody>
        </table>
         <!-- {{ $locations->links() }} -->
    </div>
    <div class="clearfix"></div>
</div>

</div>


@endsection