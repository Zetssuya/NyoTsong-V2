@extends('admin.layouts.master')

@section('page')
    Users
@endsection

@section('content')

@if($message = Session::get('msg'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    <br>
@endif

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Users Edit</h4><br/>
                    <!-- <p class="category">Editing the registered user</p> -->
                </div>
               
            </div>
            <div class="">
                
                <form class="card" action="/admin/users/updateuser/{{$users->id}}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" id="name" class="form-control myInput">
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control myInput">
                    </div>

            
                    <div class="form-group">
                        <input type="text" name="contact_no" placeholder="Contact number" id="contact_no" class="form-control myInput">
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-success" value="Update User Account">
                        </div>
                </form>
                                                
                </div>
        </div>
    </div>

@endsection