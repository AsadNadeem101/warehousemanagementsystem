@extends('adminlte::page')

@section('title', 'View Today Attendance')

@section('content_header')
    <h1>View Today Attendance</h1>
@stop

@section('content')

@if(isset($attendances))
<table class="table">
	<tr>
		<th>User Id</th>
		<th>User Name</th>
		<th>Status</th>
		<th>Attendance Time</th>
	</tr>
	@foreach($attendances as $attendance)
	<tr>
		<td>{{$attendance->employee_id}}</td>
		<td>{{$attendance->employee_name}}</td>
		<td>
			@if($attendance->status == 0)
				<span style="color: red">Absent</span>
			@elseif($attendance->status == 1)
				<span style="color: green">Present</span>
			@endif
		</td>
		@if($attendance->updated_at->gt($attendance->created_at))
			<td>{{$attendance->updated_at}}</td>			
		@endif

	</tr>
	@endforeach

</table>
@else
<h2 style="text-align: center;">Attendance Sheet Not Created</h2>
@endif

@endsection