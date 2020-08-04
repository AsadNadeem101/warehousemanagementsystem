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
                <td>{{ $ad->warehouse_id }}</td>
            </tr>
             <tr>
                <th>Description</th>
                <td>{{ $ad->title }}</td>
            </tr>

            <tr>
                <th>Location</th>
                <td>{{ $ad->description }}</td>        
            </tr>
            <tr>
                <th>Marla</th>
                <td>{{ $ad->marla }}</td>
            </tr>
            <tr>
                <th>Room</th>
                <td>{{ $ad->room }}</td>
            </tr>
            <tr>
                <th>Renter</th>
                <td>{{ $ad->duration }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $ad->status }}</td>
            </tr>
            <tr>
                <th>Bid Create</th>
                <td><a href="{{ route('warehouseadbid.create') }}"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_service">Create Bid</button></a></td>
            </tr>
            <tr>
                <th>TimeStamp</th>
                <td>{{ $ad->created_at }}</td>
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