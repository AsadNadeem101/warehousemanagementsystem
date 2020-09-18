@extends('adminlte::page')

@section('title', 'Product Create')

@section('content_header')
    <h1>Product Create</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'product.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Name</h6>
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'NAME','required','maxlength' => 20 ]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Type</h6>
	    		{!! Form::text('type',null,['class' => 'form-control','placeholder' => 'TYPE','required','maxlength' => 20 ]); !!}
	    	</div>      	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'DESCRIPTION', 'required','maxlength' => 120]); !!}
	    	</div>	
	    </div>  	
	    <br>
	    <div class="row">
	    	<div class="col-md-12" style="text-align: center">
	    		{!! Form::hidden('warehouse_ad_id',$warehouse_ad_id,['class' => 'form-control','placeholder' => 'warehouse_ad_id']); !!}
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