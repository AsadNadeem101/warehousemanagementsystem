@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<td>{{Auth::user()->id}}</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>{{Auth::user()->name}}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{Auth::user()->email}}</td>
		</tr>
		<tr>
			<th>CNIC</th>
			<td>{{Auth::user()->cnic}}</td>
		</tr>
	</table>
@stop

@section('css')
<style type="text/css">
	.form-inline {
		display: block
	}
</style>	
@stop

@section('js')

@stop
