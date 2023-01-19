@extends('crud.header')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.8 CRUD Application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" > Create New Item</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Item</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cruds as $crud)
        <tr>
            <td>{{ $crud->id }}</td>
            <td>{{ $crud->item }}</td>
            <td>{{ $crud->description }}</td>
            <td>
                
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection