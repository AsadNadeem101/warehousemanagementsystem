@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')	
	{!! Form::open(['route' => ['warehousebid.update',$ad->id],'method' => 'PATCH' , 'enctype' => 'multipart/form-data']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Select Warehouse</h6>
	    		{!! Form::select('warehouse_id', $warehouses, null, ['class'=>'form-control']) !!}
	    		
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Title</h6>
	    		{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'TITLE']); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Marla</h6>
	    		{!! Form::text('marla',null,['class' => 'form-control','placeholder' => 'MARLA']); !!}
	    	</div>	
	    	<div class="col-md-6">
	    		<h6>Room</h6>
	    		{!! Form::text('room',null,['class' => 'form-control','placeholder' => 'ROOM']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Duration</h6>
	    		{!! Form::text('duration',null,['class' => 'form-control','placeholder' => 'DURATION']); !!}
	    	</div>	
	    	<div class="col-md-6">
	    		<h6>Rent</h6>
	    		{!! Form::text('rent',null,['class' => 'form-control','placeholder' => 'RENT']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Description</h6>
	    		{!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'DESCRIPTION']); !!}
	    	</div>	    	
    		<div class="col-md-6">
                 <div class="form-group">
                  <label>Upload Ads Images</label>
                  <input id="img_path" type="file" multiple class="form-control @error('img_path') is-invalid @enderror" name="img_path[]" required>
                 </div>
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