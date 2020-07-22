@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Admin Report</h1>
@stop

@section('content')
<table class="table table-bordered">
	<tr>
		<th># of tenants</th>
		<td>{{$tenants}}</td>
	</tr>
	<tr>
		<th># of renters</th>
		<td>{{$renters}}</td>
	</tr>
	<tr>
		<th># of total_users</th>
		<td>{{$total_users}}</td>
	</tr>
	<tr>
		<th>warehouses</th>
		<td>{{$warehouses}}</td>
	</tr>
	<tr>
		<th>sales_by_service</th>
		<td>{{$sales_by_service}}</td>
	</tr>	
	<tr>
		<th>sales_by_plan</th>
		<td>{{$sales_by_plan}}</td>
	</tr>
	<tr>
		<th>sales_by_commission</th>
		<td>{{$sales_by_commission}}</td>
	</tr>
	<tr>
		<th>total_sales</th>
		<td>{{$total_sales}}</td>
	</tr>					
</table>
	
@stop

@section('css')

@stop

@section('js')

@stop
