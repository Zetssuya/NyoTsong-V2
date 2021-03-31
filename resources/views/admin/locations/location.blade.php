@extends('admin.layouts.master')


@section('content')

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
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure? You will not be able to recover this.')">Delete</i></a>
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