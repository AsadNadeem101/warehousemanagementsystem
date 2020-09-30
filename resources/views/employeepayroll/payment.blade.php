@extends('adminlte::page')

@section('title', 'Salary Payment')

@section('content_header')
    <h1>Salary Paid Time</h1>
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

{!! Form::model($employee_salary, ['method' => 'PATCH','route' => ['employeepayroll.update', $employee_salary->id]]) !!}


		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Paid date</h6>
	    		{!! Form::date('paid_at',null,['class' => 'form-control','required','placeholder' => 'PAIDTIME']); !!}
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