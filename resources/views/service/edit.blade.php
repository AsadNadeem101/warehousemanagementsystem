@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit</h1>
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
	{!! Form::open(['route' => ['service.update',$service->id],'method' => 'PATCH']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Name</h6>
	    		{!! Form::text('name',$service->name,['class' => 'form-control','placeholder' => 'NAME','required','maxlength' => 120]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::text('description',$service->description,['class' => 'form-control','placeholder' => 'DESCRIPTION','required','maxlength' => 120]); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
		    <div class="col-md-6">
	    		<h6>Charges</h6>
	    		{!! Form::number('charges',$service->charges,['class' => 'form-control','placeholder' => 'Charges','min' => '1', 'required','max' => '10000000']); !!}
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