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
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Name']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		{!! Form::email('email',null,['class' => 'form-control','placeholder' => 'Email']); !!}
	    	</div>	    	
	    </div>
	    <div class="row">
	    	<div class="col-md-6">
	    		{!! Form::text('bio',null,['class' => 'form-control','placeholder' => 'Bio']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		{!! Form::select('type', ['Permanent' => 'Permanent', 'Temporary' => 'Temporary'],null,['class' => 'form-control']); !!}
	    	</div>	    	
	    </div>	    
	    <div class="row">
	    	<div class="col-md-6">
	    		{!! Form::text('cnic',null,['class' => 'form-control','placeholder' => 'cnic']); !!}
	    	</div>
	    	<div class="col-md-6">
				{!! Form::text('phone',null,['class' => 'form-control','placeholder' => 'phone']); !!}
	    	</div>	    	
	    </div>		    
	    <div class="row">
	    	<div class="col-md-6">
	    		{!! Form::number('salary',null,['class' => 'form-control','placeholder' => 'salary']); !!}
	    	</div>

			<div class="col-md-6">
	    		{!! Form::select('warehouse_id',$warehouses,null,['class' => 'form-control']); !!}
	    	</div> 

   	
	    </div>
	    
	   	<div class="row">
	    	<div class="col-md-6">
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