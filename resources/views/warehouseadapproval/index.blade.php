@extends('adminlte::page')

@section('title', 'Warehouse Ads Approval')

@section('content_header')
    <h1>Warehouse Ads Approval</h1>
@stop

@section('content')
	{{$dataTable->table()}}
@stop

@section('css')
<style type="text/css">
	.form-inline {
		display: block
	}
</style>	
@stop

@section('js')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@stop
