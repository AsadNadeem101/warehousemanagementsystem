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
                <th>Warehouse Id</th>
                <td>{{ $subscriptionchargesverification->warehouse_id }}</td>
            </tr>
            <tr>
                <th>Renter Id</th>
                <td>{{ $subscriptionchargesverification->renter_id }}</td>
            </tr>
            <tr>
                <th>Plan Id</th>
                <td>{{ $subscriptionchargesverification->plan_id }}</td>
            </tr>
             <tr>
                <th>Warehouse Ad Id</th>
                <td>{{ $subscriptionchargesverification->warehouse_ad_id }}</td>
            </tr>
            <tr>
                <th>Account Number</th>
                <td>{{ $subscriptionchargesverification->account_number }}</td>
            </tr>
            <tr>
                <th>Paid Status</th>
                <td>{{ $subscriptionchargesverification->payment_status }}</td>
            </tr>
            <tr>
                <th>Paid Date</th>
                <td>{{ $subscriptionchargesverification->paid_at }}</td>
            </tr>
            <tr>
                <th>Is Renter Paid</th>
                @if($system_verification == 'pending')
                {!! Form::model($subscriptionchargesverification, ['method' => 'PATCH','route' => ['plansubscriptionverification.update', $subscriptionchargesverification->id]]) !!}
            
                <td><a href="/subscriptioncharges/{{$id}}/verification"><button type="button" class="btn btn-primary">Yes</button></a> <a href="/subscriptioncharges/{{$id}}/verifications"><button type="button" class="btn btn-primary">No</button></a></td>

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