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
                <th>Tenant Warehouse</th>
                <td>{{ $tenantrentverification->tenant_warehouse_id }}</td>
            </tr>
             <tr>
                <th>Month</th>
                <td>{{ $tenantrentverification->month }}</td>
            </tr>

            <tr>
                <th>Rent</th>
                <td>{{ $tenantrentverification->rent }}</td>        
            </tr>
            <tr>
                <th>Account Number</th>
                <td>{{ $tenantrentverification->account_number }}</td>
            </tr>
            <tr>
                <th>Paid Status</th>
                <td>{{ $tenantrentverification->payment_status }}</td>
            </tr>
            <tr>
                <th>Paid Time</th>
                <td>{{ $tenantrentverification->paid_at }}</td>
            </tr>
            <tr>
                <th>Is Tenant Paid</th>
                @if($system_verification == 'pending')
                {!! Form::model($tenantrentverification, ['method' => 'PATCH','route' => ['tenantrentverification.update', $tenantrentverification->id]]) !!}
            
                <td><a href="/tenantrent/{{$id}}/verification"><button type="button" class="btn btn-primary">Yes</button></a></td>

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