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
                <th>TimeStamp</th>
                <td>{{ $ad->created_at }}</td>
            </tr>
            <tr>
                @if( $ad->status == 'active')
                <th>Subscription Plans</th>
                <td><a href="/selectplan/{{$ad->id}}"><button type="button" class="btn btn-primary">Select Plan</button></a></td>
                @endif
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