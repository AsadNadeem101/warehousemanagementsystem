@extends('adminlte::page')

@section('title', 'Dashboard') 

@section('content_header')
  <h1 style="margin-bottom:-10px"><b>View Remaining Inventory in this Section</b></h1>
    <hr class="divider" >
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


{!! Form::open(['route' =>  ['inventory.checkremaing'],'method' => 'post']) !!}

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Product Name:</strong>
            {!! Form::select('product_id', $get_products, null, ['class'=>'form-control']) !!}
        </div> 
    </div>
      
</div><br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
   
        <button type="submit" class="btn btn-secondary"> Submit</button>
      
    </div>    
</div>

{!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

@stop