@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'plan.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Name</h6>
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'NAME']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::text('description',null,['class' => 'form-control','placeholder' => 'DESCRIPTION']); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Duration</h6>
	    		{!! Form::number('duration',null,['class' => 'form-control','placeholder' => 'DURATION IN DAYS']); !!}
	    	</div>	    	
	    	<div class="col-md-6">
	    		<h6>Price</h6>
	    		{!! Form::number('price',null,['class' => 'form-control','placeholder' => 'PRICE IN RS']); !!}
	    	</div>	    	
	    </div>		
	    <br>
	    <div class="row">
	    	<div class="col-md-12" style="text-align: center">
	    		{!! Form::submit('Save', ['class'=>'btn btn-success']); !!}
	    	</div>
	    </div>
	    
	   
	{!! Form::close() !!}
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop