@extends('adminlte::page')

@section('title', 'Warehouse Section') 

@section('content_header')
    <h1>Warehouse Section Details</h1>
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
                <th>Manage Inventory</th>
                <td><a href="/addinventory/{{$warehouse_admin_section_id}}/add"><button type="button" class="btn btn-primary">Manage Inventory</button></a></td>
            </tr>
            <tr>
                <th>Remaining Inventory</th>
                <td><a href="/remaininginventory/{{$warehouse_admin_section_id}}/remaining"><button type="button" class="btn btn-primary">Remaining Inventory</button></a></td>
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