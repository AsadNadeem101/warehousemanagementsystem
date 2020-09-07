@extends('adminlte::page')

@section('title', 'Index')

@section('content_header')
    <h1>Tenant Dashboard</h1>
@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="row">
      		@foreach($data as $index => $warehouse_section)
			<div class="col-md-4">
				<a href="/tenantsectiondetail/{{$warehouse_section->id}}" data-toggle="tooltip" title="# of open workorders">          
			        <div class="box hvr-grow hvr-shutter-out-vertical"style="background:rgba(0, 0, 0, 0) radial-gradient(at center center, rgba(241, 0, 0, 0.8) 0%, rgba(255, 255, 255, 0.6) 100%) repeat scroll 0% 0%">
			          <h3 style="font-weight:600;font-size: 20px;text-align: center">Click to view the Detail</h3>
			          <h2 style="font-size: 3.0vw;text-align: center">{{$warehouse_section->name}}</h2>
			        </div>
	        	</a>  
			</div>
			@endforeach
		</div>
	</div>
</div>
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

@stop
