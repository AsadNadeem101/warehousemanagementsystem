@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')	
{!! Form::model($ad, ['method' => 'PATCH','enctype' => 'multipart/form-data','route' => ['warehousead.update', $ad->id]]) !!}

		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Select Warehouse</h6>
	    		{!! Form::select('warehouse_id', $warehouses, null, ['class'=>'form-control warehouse_id']) !!}
	    		
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Title</h6>
	    		{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'TITLE','required','maxlength' => 20 ]); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Marla (Remaining <span style="color: red" id="remaining-marla"></span> )</h6>
	    		{!! Form::number('marla',null,['class' => 'form-control entered-marla','placeholder' => 'MARLA','min' => '1', 'required','max' => '100']); !!}
	    	</div>	
	    	<div class="col-md-6">
	    		<h6>Room # (Available <span style="color: red" id="available"></span> )</h6>

	    		{!! Form::text('room',null,['class' => 'form-control entered-room','placeholder' => 'ROOM','min' => '1', 'required','max' => '100']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Duration <small>(in months)</small></h6>
	    		{!! Form::number('duration',null,['class' => 'form-control','placeholder' => 'DURATION','min' => '1', 'required','max' => '100']); !!}
		    </div>	
	    	<div class="col-md-6">
	    		<h6>Rent Per Month<small>(in rupees)</small></h6>
	    		{!! Form::number('rent',null,['class' => 'form-control','placeholder' => 'RENT','min' => '1', 'required']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">	
	    	<div class="col-md-6">
	    		<h6>Category</h6>
	    		{!! Form::select('category', ['normal' => 'Normal', 'cooling' => 'Cooling'],null,['class' => 'form-control','required']); !!}
	    	</div>		
    		<div class="col-md-6">
                
                  <label>Upload Ads Images</label>
                   <div class="form-group">
                  {!! Form::file('images[]',array('multiple'=>true,'class'=>'send-btn')) !!}
                 </div>
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
	    		<input type="submit" class="btn btn-success" onclick="return doValidate()">
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