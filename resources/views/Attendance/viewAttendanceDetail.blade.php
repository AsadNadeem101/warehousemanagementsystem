@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>View Attendance</h1>
@stop

@section('content')

	@if(isset($attendances))

	<h2>{{$attendances[0]->employee_name}} Attendance Sheet</h2>
	<table class="table">
		<tr>
			<th>Status</th>
			<th>Attendance Time</th>
		</tr>
		@foreach($attendances as $attendance)
		<tr>
			<td>{{$attendance->status}}</td>
			@if($attendance->updated_at->gt($attendance->created_at))
				<td>{{$attendance->updated_at}}</td>			
			@else
				<td>{{$attendance->updated_at}}</td>
			@endif
		</tr>
		@endforeach
	</table>
	{{$attendances->links() }}
	@else
	<h2 style="text-align: center;">No attendance found</h2>
	@endif

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop