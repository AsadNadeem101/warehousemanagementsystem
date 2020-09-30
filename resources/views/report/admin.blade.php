@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Admin Report</h1>
@stop

@section('content')
<table class="table table-bordered">
	<tr>
		<th># of Tenants</th>
		<td>{{$tenants}}</td>
	</tr>
	<tr>
		<th># of Renters</th>
		<td>{{$renters}}</td>
	</tr>
	<tr>
		<th># of Users</th>
		<td>{{$total_users}}</td>
	</tr>
	<tr>
		<th>Warehouses</th>
		<td>{{$warehouses}}</td>
	</tr>
	<tr>
		<th># of Warehouse Ads</th>
		<td>{{$warehouse_ads}}</td>
	</tr>
						
</table>
	
@stop

@section('css')

@stop

@section('js')

@stop
