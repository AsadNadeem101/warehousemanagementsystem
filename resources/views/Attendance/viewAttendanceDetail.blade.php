@extends('adminlte::page')

@section('title', 'Detail Attendance')

@section('content_header') 
<h1>View Attendance Detail</h1> 
@stop

@section('content')

	@if(isset($attendances))

	<h4 style="text-align: center; color: orange"><b>{{$attendances[0]->employee_name}} Attendance Sheet</b></h4>
	<table class="table table-bordered table-striped">
		<tr>
			<th>Status</th>
			<th>Attendance Time</th>
		</tr>
		@foreach($attendances as $attendance)
		<tr>
			@if($attendance->status == 0)
			<td style="color: red">Absent</td>
			@elseif($attendance->status == 1)
			<td style="color: green">Present</td>
			@endif
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