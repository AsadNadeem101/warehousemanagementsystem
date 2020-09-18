@extends('adminlte::page')

@section('title', 'Dashboard') 

@section('content_header')
  <h1 style="margin-bottom:-10px"><b>View Remaining Inventory in this Section</b></h1>
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

<h3>Remainig : <b style="color: green">{{$remaining}}</b> Piece</h3>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

@stop