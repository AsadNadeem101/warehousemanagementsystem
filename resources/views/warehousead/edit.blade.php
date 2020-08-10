@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')	
	{!! Form::open(['route' => ['warehousead.update',$ad->id],'method' => 'PATCH' , 'enctype' => 'multipart/form-data']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Select Warehouse</h6>
	    		{!! Form::text('warehouse_id', $ad->warehouse_id, ['readonly','class'=>'form-control']) !!}
	    		
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Title</h6>
	    		{!! Form::text('title',$ad->title,['class' => 'form-control','placeholder' => 'TITLE']); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Marla</h6>
	    		{!! Form::text('marla',$ad->marla,['class' => 'form-control','placeholder' => 'MARLA']); !!}
	    	</div>	
	    	<div class="col-md-6">
	    		<h6>Room</h6>
	    		{!! Form::text('room',$ad->room,['class' => 'form-control','placeholder' => 'ROOM']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Duration <small>(Month)</small></h6>
	    		{!! Form::text('duration',$ad->duration,['class' => 'form-control','placeholder' => 'DURATION']); !!}
	    	</div>	
	    	<div class="col-md-6">
	    		<h6>Rent</h6>
	    		{!! Form::text('rent',$ad->rent,['class' => 'form-control','placeholder' => 'RENT']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::textarea('description',$ad->description,['class' => 'form-control','placeholder' => 'DESCRIPTION']); !!}
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