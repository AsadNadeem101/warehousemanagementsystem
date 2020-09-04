@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')	 

	{!! Form::open(['route' => 'warehousead.store','method' => 'post' , 'enctype' => 'multipart/form-data']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Select Warehouse</h6>
	    		{!! Form::select('warehouse_id', $warehouses, null, ['class'=>'form-control warehouse_id']) !!}
	    		
	    	</div>
	    	<div class="col-md-6">
	    		<h6>Title</h6>
	    		{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'TITLE']); !!}
	    	</div>	    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Marla (Remaining <span style="color: red" id="remaining-marla"></span> )</h6>
	    		{!! Form::number('marla',null,['class' => 'form-control entered-marla','placeholder' => 'MARLA']); !!}
	    	</div>	
	    	<div class="col-md-6">
	    		<h6>Room #</h6>
	    		{!! Form::text('room',null,['class' => 'form-control','placeholder' => 'ROOM']); !!}
	    	</div>    	
	    </div>
	    <br>
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Duration <small>(in months)</small></h6>
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
                  {!! Form::file('images[]',array('multiple'=>true,'class'=>'send-btn')) !!}
                 </div>
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
    <script>
    	var warehouse_id = $(".warehouse_id").val();
	    console.log(warehouse_id)
	    remaining_marla = 0;
	    $.ajax({
		  url  : "{{route('check-remaining-marla')}}",
		  data : {'warehouse_id':warehouse_id}
		}).done(function(result) {
		  $("#remaining-marla").text(result.marla)
		});
    	$(".warehouse_id").change(function(){
    		var warehouse_id = $(".warehouse_id").val();
    	    console.log(warehouse_id)

    	    $.ajax({
			  url  : "{{route('check-remaining-marla')}}",
			  data : {'warehouse_id':warehouse_id}
			}).done(function(result) {
			   console.log(result)
			   $("#remaining-marla").val(result.remaining_marla)
			   remaining_marla = result.remaining_marla;
			   
			});
    	})

    	function doValidate()
    	{
    		
    		var entered_marla = $('.entered-marla').val();
    		var remaining_marla = $('#remaining-marla').text();
    		console.log(remaining_marla)
    		console.log(entered_marla)
    		var temp = remaining_marla - entered_marla;
    		if (temp >= 0)
    		{
    			return true;
    		}
    		else
    		{
    			Swal.fire("Please enter less than or equal to "+remaining_marla+"Marla");
    			return false;	
    		}
    		
    	}
	</script>
@stop