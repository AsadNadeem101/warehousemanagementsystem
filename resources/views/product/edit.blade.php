@extends('adminlte::page')

@section('title', 'Product Edit')

@section('content_header')
    <h1>Product Edit</h1>
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
	{!! Form::open(['route' => ['product.update',$product->id],'method' => 'PATCH']) !!}
		{!! Form::token(); !!}
	     <div class="row">
	    	<div class="col-md-6">
	    		<h6>NAME</h6>
	    		{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'NAME','required','maxlength' => 20 ]); !!}
	    	</div>
	    	<div class="col-md-6">
	    		<h6>TYPE</h6>
	    		{!! Form::text('type',null,['class' => 'form-control','placeholder' => 'TYPE','required','maxlength' => 20 ]); !!}
	    	</div>      	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>DESCRIPTION</h6>
	    		{!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'DESCRIPTION', 'required','maxlength' => 120]); !!}
	    	</div>	
	    </div>  	
	    <br>
	  <!--   <div class="row">
	    	<div class="col-md-12" style="text-align: center">
	    		{!! Form::hidden('warehouse_ad_id',$warehouse_ad_id,['class' => 'form-control','placeholder' => 'warehouse_ad_id']); !!}
	    		{!! Form::submit('Save', ['class'=>'btn btn-success']); !!}
	    	</div>
	    </div> -->
	    
	   
	{!! Form::close() !!}
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop