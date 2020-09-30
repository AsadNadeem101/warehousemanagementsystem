    {{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 <h1 style="margin-bottom:-10px"><b>Create WarehouseAdmin</b></h1>
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

{!! Form::open(array('route' => 'warehouseadmin.store','method'=>'POST')) !!}

<div class="row">
   <div class="col-md-6">
        <div class="form-group">
            <h6> Name:</h6>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','required' => 'required')) !!}
        </div>
        <div class="form-group">
            <h6> CNIC:</h6>
            {!! Form::text('cnic', null, array('placeholder' => 'CNIC','class' => 'form-control',)) !!}
        </div>
        <div class="form-group">
            <h6> Contact</h6>
            {!! Form::number('phone', null, array('placeholder' => '03XXXXXXXXX','class' => 'form-control',)) !!}
        </div>
        <div class="form-group">
            <h6> Email:</h6>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','required' => 'required')) !!}
        </div>
   
        <div class="form-gruop">
            <h6> Password:</h6>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required' => 'required')) !!}
        </div>
        
         <div class="form-group">
            <h6>Confirm Password:</h6>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','required' => 'required')) !!}
        </div>
   </div>
</div>
     <br>
<div class="row">
     <input type="hidden" name="type" value="warehouse_admin" />
     <input type="hidden" name="warehouse_id" value="{{$warehouse_id}}" />
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
         <button type="submit" class="btn btn-secondary"><i class="fas fa-pen-nib"></i> &nbsp; Submit</button>
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