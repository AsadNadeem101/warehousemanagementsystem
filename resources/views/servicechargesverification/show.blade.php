@extends('adminlte::page')

@section('title', 'Show Rent Details')

@section('content_header')
    <h1>Show</h1>
@stop

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Renter Id</th>
                <td>{{ $servicechargesverification->renter_id }}</td>
            </tr>
            <tr>
                <th>Service Id</th>
                <td>{{ $servicechargesverification->service_id }}</td>
            </tr>
             <tr>
                <th>Month</th>
                <td>{{ $servicechargesverification->month }}</td>
            </tr>
            <tr>
                <th>Account Number</th>
                <td>{{ $servicechargesverification->account_number }}</td>
            </tr>
            <tr>
                <th>Paid Status</th>
                <td>{{ $servicechargesverification->payment_status }}</td>
            </tr>
            <tr>
                <th>Paid Date</th>
                <td>{{ $servicechargesverification->paid_at }}</td>
            </tr>
            <tr>
                <th>Is Renter Paid</th>
                @if($system_verification == 'pending')
                {!! Form::model($servicechargesverification, ['method' => 'PATCH','route' => ['servicechargesverification.update', $servicechargesverification->id]]) !!}
            
                <td><a href="/servicecharges/{{$id}}/verification"><button type="button" class="btn btn-primary">Yes</button></a> <a href="/servicecharges/{{$id}}/verifications"><button type="button" class="btn btn-primary">No</button></a></td>

                {!! Form::close() !!}
                @else
                  <td>  <p style="color:green"><b>Verified from System Admin</b></p></td>
                @endif
            </tr>
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