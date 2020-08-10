 @extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Bid Create</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'warehouseadbid.store','method' => 'post']) !!}
		{!! Form::token(); !!}
	    <div class="row">
	    	<div class="col-md-6">
	    		<h6>Bid Amount</h6>
	    		{!! Form::text('bid_amount',null,['class' => 'form-control','placeholder' => 'BID AMOUNT']); !!}
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