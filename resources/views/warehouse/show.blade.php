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
                <td>{{ $warehouse->name }}</td>
            </tr>
             <tr>
                <th>Description</th>
                <td>{{ $warehouse->description }}</td>
            </tr>

            <tr>
                <th>Location</th>
                <td>{{ $warehouse->location }}</td>        
            </tr>
            <tr>
                <th>Marla</th>
                <td>{{ $warehouse->marla }}</td>
            </tr>
            <tr>
                <th>Room</th>
                <td>{{ $warehouse->room }}</td>
            </tr>
            <tr>
                <th>Renter</th>
                <td>{{ $warehouse->renter_id }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $warehouse->status }}</td>
            </tr>
            <tr>
                <th>TimeStamp</th>
                <td>{{ $warehouse->created_at }}</td>
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