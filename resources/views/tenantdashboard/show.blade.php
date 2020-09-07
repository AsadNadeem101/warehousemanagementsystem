@extends('adminlte::page')

@section('title', 'Tenant') 

@section('content_header')
    <h1>Show Details</h1>
@stop

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="container-fluid">
        <table class="table table-bordered table-striped">

            @foreach ($details as $object)
    
             <tr>
                <th>Warehouse Name</th>
                <td>{{App\Helpers\Helper::warehouseIdToName($object->warehouse_id)}}</td>
            </tr>
            <tr>
                <th>Warehouse Section Name</th>
                <td>{{ $object->name }}</td>
            </tr>
             <tr>
                <th>Warehouse Section Description</th>
                <td>{{ $object->description }}</td>
            </tr>

            <tr>
                <th>Warehouse Section Rooms</th>
                <td>{{ $object->room }}</td>        
            </tr>
            <tr>
                <th>Marla</th>
                <td>{{ $object->marla}}</td>
            </tr>
           
            <tr>
                <th>Renter Name</th>
                <td>{{App\Helpers\Helper::userIdToName($object->renter_id)}}</td>
            </tr>
            <tr>
                <th>Tenant Name</th>
                <td>{{App\Helpers\Helper::userIdToName($object->tenant_id)}}</td>
            </tr>
            <tr>
                <th>Duration in months</th>
                <td>{{ $object->duration }}</td>
            </tr>
            <tr>
                <th>Rent</th>
                <td>{{ $object->rent }}</td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td>{{ $object->start_date }}</td>
            </tr>
            <tr>
                <th>End Date</th>
                <td>{{ $object->end_date }}</td>
            </tr>
            
            @endforeach
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