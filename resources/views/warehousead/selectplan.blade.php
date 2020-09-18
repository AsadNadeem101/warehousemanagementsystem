@extends('adminlte::page')

@section('title', 'Plan Selection') 

@section('content_header')
    <h1>Plan Selection</h1>
@stop

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="container-fluid">
            <table class="table table-striped">
                 @if($warehouse_Ad_id == null)
              <thead>
                <tr>
                  <th scope="col">Plan Name</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Price</th>
                  <th scope="col">Subscribe</th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($selectplan as $object)      
                <tr>   
                  <td>{{ $object->name }}</td>
                  <td>{{ $object->description }}</td>
                  <td>{{ $object->price }}</td>               
                  <td>
                     <a href="/warehousead/{{$warehouse_ad_id}}/subscribeplan/{{$object->id}}"><button type="button" class="btn btn-primary"> Subscribe </button></a>
                  </td>
              
                  
                </tr>
                @endforeach   
              </tbody>
              @else
              <br>
              <h4 style="text-align: center">You already<b style="color:blue"> SUBSCRIBE </b>the Plan for this Warehouse Ad</h4>
              <h5 style="text-align: center"><a href="/plansubscriptionuser"><b>Click here</b></a>  to Activate Plan</h5>
               @endif
            </table>
        </div>
    </div>
</div>

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop