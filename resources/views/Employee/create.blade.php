@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'employee.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    	<h6>Name</h6>
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'NAME','required','maxlength' => 20 ]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Email</h6>
	    		{!! Form::email('email',null,['class' => 'form-control','placeholder' => 'EMAIL','required']); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Bio</h6>
	    		{!! Form::text('bio',null,['class' => 'form-control','placeholder' => 'BIO','required','maxlength' => 50 ]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Type</h6>
	    		{!! Form::select('type', ['Permanent' => 'Permanent', 'Temporary' => 'Temporary'],null,['class' => 'form-control']); !!}
	    	</div>	    	
	    </div>
	    <br>	    
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Cnic</h6>
	    		{!! Form::number('cnic',null,['class' => 'form-control','placeholder' => 'CNIC','min' => '0', 'required','max' => '9999999999999']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Contact No</h6>
				{!! Form::number('phone',null,['class' => 'form-control','placeholder' => 'PHONE','min' => '0', 'required','max' => '99999999999']); !!}
	    	</div>	    	
	    </div>	
		<br>	    
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Salary</h6>
	    		{!! Form::number('salary',null,['class' => 'form-control','placeholder' => 'SALARY','min' => '0', 'required','max' => '10000000']); !!}
	    	</div>

			<div class="col-md-6">
	    		{!! Form::hidden('warehouse_id',Auth::user()->warehouse_id) !!}
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