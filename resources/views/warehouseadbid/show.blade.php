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
            <tr>
                <th>Warehouse Ad</th>
                <td>{{ $bid->warehouse_ad_id }}</td>
            </tr>
             <tr>
                <th>Renter</th>
                <td>{{ $bid->renter_id }}</td>
            </tr>
            <tr>
                <th>Tenant</th>
                <td>{{ $bid->tenant_id }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ $bid->bid_amount }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $bid->status }}</td>
            </tr>
            <tr>
                <th>TimeStamp</th>
                <td>{{ $bid->created_at }}</td>
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