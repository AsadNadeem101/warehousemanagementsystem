@extends('adminlte::page')

@section('title', 'Show')

@section('content_header')
    <h1>Show</h1>
@stop

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <td>{{ $product->name }}</td>
            </tr>
             <tr>
                <th>Description</th>
                <td>{{ $product->description }}</td>
            </tr>

            <tr>
                <th>Manufacturer</th>
                <td>{{ $product->manufacturer }}</td>        
            </tr>
            
            <tr>
                <th>Timestamp</th>
                <td>{{ $product->created_at }}</td>
            </tr>
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