@extends('adminlte::page')

@section('title', 'Dashboard') 

@section('content_header')
  <h1 style="margin-bottom:-10px"><b>Mange Inventory</b></h1>
    <hr class="divider" >
@stop

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' =>  ['inventory.store'],'method' => 'post']) !!}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Product Name:</strong>
            {!! Form::select('product_id', $get_products, null, ['class'=>'form-control']) !!}
        </div> 
    </div>
    <div class="col-md-6">
        <strong>Inventory Type:</strong>
       <select class="form-control">
            <option>Choose Inventory Type</option>
            <option value="in">IN</option>
            <option value="out">OUT</option>
        </select> 
    </div>
    <div class="col-md-6"> 
        <div class="form-group">
            <div class="in box">{!! Form::number('in', null, array('placeholder' => 'No of Piece IN','class' => 'form-control')) !!} </div>
            <div class="out box">{!! Form::number('out', null, array('placeholder' => 'No of Piece OUT','class' => 'form-control')) !!} </div>
        </div>   
    </div>
      <input type="hidden" name="tenant_warehouse_section_id" value="<?php echo $tenant_warehouse_section_id; ?>">
      <input type="hidden" name="warehouse_id" value="<?php echo $warehouse_id; ?>">
      <input type="hidden" name="tenant_id" value="<?php echo $tenant_id; ?>">
      <input type="hidden" name="warehouse_admin" value="<?php echo $warehouse_admin; ?>">
      
</div><br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-secondary"><i class="fas fa-pen-nib"></i> &nbsp; Submit</button>
    </div>    
</div>
{!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
</style>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
@stop