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
                <td>{{ $plan->name }}</td>
            </tr>
             <tr>
                <th>Description</th>
                <td>{{ $plan->description }}</td>
            </tr>

            <tr>
                <th>Duration</th>
                <td>{{ $plan->duration }}</td>        
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $plan->price }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $plan->status }}</td>
            </tr>
            <tr>
                <th>TimeStamp</th>
                <td>{{ $plan->created_at }}</td>
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