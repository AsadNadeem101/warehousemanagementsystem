@extends('adminlte::page')

@section('title', 'Products') 

@section('content_header')
    <h1>Manage Inventory</h1>
@stop

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="container-fluid">
            <table class="table table-striped">
                 
              <thead>
                <tr>
                  <th scope="col">Plan Name</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Price</th>
                  <th scope="col">Subscribe</th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($selectplan as $object)      
                <tr>   
                  <td>{{ $object->name }}</td>
                  <td>{{ $object->description }}</td>
                  <td>{{ $object->price }}</td>
                  <td><button type="button" class="btn btn-primary"> Subscribe </button></td>
                  
                </tr>
                @endforeach   
              </tbody>
             
            </table>
        </div>
    </div>
</div>

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop