@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Tenant Bill Payment</h1>
@stop

@section('content')

{!! Form::model($tenantrent, ['method' => 'PATCH','route' => ['tenantrent.update', $tenantrent->id]]) !!}

		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Please enter your account number for verfication</h6>
	    		{!! Form::number('account_number',null,['class' => 'form-control','placeholder' => 'Account Number']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Paid time</h6>
	    		{!! Form::date('paid_at',null,['class' => 'form-control','placeholder' => 'PAIDTIME']); !!}
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