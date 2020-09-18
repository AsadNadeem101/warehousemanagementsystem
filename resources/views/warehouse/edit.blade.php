@extends('adminlte::page')

@section('title', 'Edit Warehouse')

@section('content_header')
    <h1>Edit Warehouse</h1>
@stop

@section('content')

{!! Form::model($warehouse, ['method' => 'PATCH','route' => ['warehouse.update', $warehouse->id]]) !!}

	<div class="row">
	    	<div class="col-md-6">
	    		<h6>Name</h6>
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'NAME', 'required','maxlength' => 20,]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>City</h6>
	    		{!! Form::text('city',null,['class' => 'form-control','placeholder' => 'CITY', 'required','maxlength' => 10]); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	
	    	<div class="col-md-6">
	    		<h6>Address</h6>
	    		{!! Form::text('address',null,['class' => 'form-control','placeholder' => 'ADDRESS', 'required','maxlength' => 50]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Room</h6>
	    		{!! Form::number('room',null,['class' => 'form-control','placeholder' => 'Room','min' => '1', 'required','max' => '100']); !!}
	    	</div> 
	    </div>
	    <br>
	    <div class="row">
	    <div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'DESCRIPTION', 'required','maxlength' => 120]); !!}
	    	</div>	     		
	    	<div class="col-md-6">
	    		<h6>Marla</h6>
	    		{!! Form::number('marla',null,['class' => 'form-control','placeholder' => 'MARLA','min' => '1', 'required','max' => '100']); !!}	    		
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