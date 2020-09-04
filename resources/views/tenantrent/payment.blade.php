@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Tenant Bill Payment</h1>
@stop

@section('content')

	{!! Form::open(['route' => ['tenantrent.update',$tenantrent->id],'method' => 'patch']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Paid</h6>
	    		{!! Form::text('paid',null,['class' => 'form-control','placeholder' => 'Paid']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Paid time</h6>
	    		{!! Form::datetime('paid_at',null,['class' => 'form-control','placeholder' => 'PAIDTIME']); !!}
	    	</div>	    	
	    </div>
	    <br><br>
	    <center>	
	   	<div class="row">
	   		<div class="col-md-12">
	   			{!! Form::submit('Save', ['class'=>'btn btn-success']); !!}
	   		</div>
	   	</div>
	    </center>
	   
	{!! Form::close() !!}
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop