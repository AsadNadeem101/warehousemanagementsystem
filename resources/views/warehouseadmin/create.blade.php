{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 <h1 style="margin-bottom:-10px"><b>Create WarehouseAdmin</b></h1>
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

{!! Form::open(array('route' => 'warehouseadmin.store','method'=>'POST')) !!}

<div class="row">
   <div class="col-md-6">
        <div class="form-group">
            <strong><i class="fas fa-file-signature" style="color: #6c757d"></i> &nbsp Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','required' => 'required')) !!}
        </div>
        <div class="form-group">
            <strong><i class="fas fa-file-signature" style="color: #6c757d"></i> &nbsp CNIC:</strong>
            {!! Form::text('cnic', null, array('placeholder' => 'CNIC','class' => 'form-control','required' => 'required','field' => 'Unique:cnic',)) !!}
        </div>

        <div class="form-group">
            <strong><i class="fas fa-envelope" style="color: #6c757d"></i>&nbsp Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','required' => 'required')) !!}
        </div>
   
        <div class="form-gruop">
            <strong><i class="fas fa-key"  style="color: #6c757d"></i>&nbsp Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','required' => 'required')) !!}
        </div>
        
         <div class="form-group">
            <strong><i class="fas fa-key" style="color: #6c757d"></i>&nbsp Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
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