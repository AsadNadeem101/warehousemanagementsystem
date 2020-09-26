@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="container-fluid">                    
 			<h1 style="margin-bottom:-10px;color:#f58936"><b>Super Admin Dashboard</b></h1>  
 			<hr class="divider" style="border: 3px solid #272d47;width: 100%;">
        </div>
		<div class="row">
			<div class="container-fluid">     
			<br>               
 				<h3 style="margin-bottom:-10px;color:blue;text-align: center;"><b>Warehouse</b></h3>  
 				<hr class="divider" style="border: 3px solid #272d47;width:80%">
        	</div>
        		@if($warehouses->isEmpty())

        		<h4 style="font-weight:600;font-size: 20px;margin-left: 30px">You have not currently any warehouse</h4>

        		@else        	
	      		@foreach($warehouses as $index => $warehouse)
				<div class="col-md-4">
					<a href="/warehousesection/{{$warehouse->id}}" data-toggle="tooltip" title="Warehouse">          
				        <div class="box hvr-grow hvr-shutter-out-vertical"style="background-color: #cee9ef;">
				          <h3 style="font-weight:600;font-size: 20px;text-align: center">Click to view the sections</h3>
				          <h2 style="font-size: 3.0vw;text-align: center">{{$warehouse->name}}</h2>
				        </div>
		        	</a>  
				</div>
				@endforeach
				@endif
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
