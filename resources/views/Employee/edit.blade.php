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

	{!! Form::open(['route' => ['employee.update',$employee->id],'method' => 'PATCH']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Name</h6>
	    		{!! Form::text('name',$employee->name,['class' => 'form-control','placeholder' => 'NAME']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Email</h6>
	    		{!! Form::email('email',$employee->email,['class' => 'form-control','placeholder' => 'EMAIL']); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Bio</h6>
	    		{!! Form::text('bio',$employee->bio,['class' => 'form-control','placeholder' => 'BIO']); !!}
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
	    		{!! Form::text('cnic',$employee->cnic,['class' => 'form-control','placeholder' => 'CNIC']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Phone</h6>
				{!! Form::text('phone',$employee->phone,['class' => 'form-control','placeholder' => 'PHONE']); !!}
	    	</div>	    	
	    </div>		
	    <br>    
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Salary</h6>
	    		{!! Form::number('salary',$employee->salary,['class' => 'form-control','placeholder' => 'SALARY']); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Status</h6>
	    		{!! Form::text('status',$employee->status,['class' => 'form-control','placeholder' => 'STATUS']); !!}
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