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
	{!! Form::open(['route' => 'warehousead.store','method' => 'post' , 'enctype' => 'multipart/form-data']) !!}
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
    <script>
    	var warehouse_id = $(".warehouse_id").val();
	    console.log(warehouse_id)
	    remaining_marla = 0;
	    available = 0;
	    $.ajax({
		  url  : "{{route('check-remaining-marla')}}",
		  data : {'warehouse_id':warehouse_id}
		}).done(function(result) {
		  $("#remaining-marla").text(result.marla);
		  $("#available").text(result.room)
		});
    	$(".warehouse_id").change(function(){
    		var warehouse_id = $(".warehouse_id").val();
    	    
    	    $.ajax({
			  url  : "{{route('check-remaining-marla')}}",
			  data : {'warehouse_id':warehouse_id}
			}).done(function(result) {
			   console.log(result)
			   $("#remaining-marla").text(result.marla)
			   $("#available").text(result.room)
			   remaining_marla = result.marla;
			   available = result.room;
			});
    	})

    	function doValidate()
    	{
    		
    		var entered_marla = $('.entered-marla').val();
    		var remaining_marla = $('#remaining-marla').text();
    		var available_rooms = $('#available').text();
    		
    		console.log(available_rooms)
    		var temp = remaining_marla - entered_marla;
    		
    		var entered_room = $('.entered-room').val();
			console.log(entered_room)
			debugger
    		if (temp >= 0 && entered_room <= available_rooms)
    		{

    			return true;
    		}
    		else
    		{
    			Swal.fire("Please enter less than or equal to "+remaining_marla+"Marla & rooms less than "+available_rooms);
    			return false;	
    		}
    		
    	}
	</script>
@stop