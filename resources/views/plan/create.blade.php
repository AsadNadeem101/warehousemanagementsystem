@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')

 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	{!! Form::open(['route' => 'plan.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Name</h6>
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'NAME','required','maxlength' => 20]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::text('description',null,['class' => 'form-control','placeholder' => 'DESCRIPTION','required','maxlength' => 150]); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Duration</h6>
	    		{!! Form::number('duration',null,['class' => 'form-control','placeholder' => 'DURATION IN DAYS','min' => '1', 'required','max' => '365']); !!}
	    	</div>	    	
	    	<div class="col-md-6">
	    		<h6>Price</h6>
	    		{!! Form::number('price',null,['class' => 'form-control','placeholder' => 'PRICE IN RS','min' => '1', 'required','max' => '10000000']); !!}
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