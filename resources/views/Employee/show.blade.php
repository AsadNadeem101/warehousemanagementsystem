@extends('adminlte::page')

@section('title', 'Show')

@section('content_header')
    <h1>Show</h1>
@stop

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <td>{{ $employee->name }}</td>
            </tr>
             <tr>
                <th>Email</th>
                <td>{{ $employee->email }}</td>
            </tr>

            <tr>
                <th>Bio</th>
                <td>{{ $employee->bio }}</td>        
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ $employee->type }}</td>
            </tr>
            <tr>
                <th>Cnic</th>
                <td>{{ $employee->cnic }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $employee->phone }}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>{{ $employee->salary }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $employee->status }}</td>
            </tr>
            <tr>
                <th>Created at</th>
                <td>{{ $employee->created_at }}</td>
            </tr>
            <tr>
                <th>View Attendence Detail</th>
                
                <td>
                    <a href="/viewattendancedetail/{{$employee->id}}"><button type="button" class="btn btn-primary">Detail</button></a> 
                </td>
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