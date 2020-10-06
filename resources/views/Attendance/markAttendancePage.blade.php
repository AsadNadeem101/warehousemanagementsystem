@extends('adminlte::page')

@section('title', 'Mark Attendance')

@section('content_header')
    <h1>Mark Attendance</h1>
@stop

@section('content')

	@if(isset($attendances))
			<table class="table">
				<thead>
					<th>Id</th>
					<th>Name</th>
					<th>Mark Attendace</th>
				</thead>
				<tbody>
					@foreach($attendances as $attendance) 
							<tr>
								<td>{{$attendance->employee_id}}</td>
								<td>{{$attendance->employee_name}}</td>
							@if($attendance->updated_at->gt($attendance->created_at))
								<td>
									<p style="color:blue">Marked</p>
								</td>
							@else
								<td>
									<button onclick="location.href='{{ url('mark/'.'present/'.$attendance->employee_id) }}'">Mark</button> 
								</td>
							</tr>	
							@endif	
					@endforeach
				</tbody>
			</table>
		@isset($err)
		<h1>{{$err}}</h1>
		@endisset
	@else
	<h2>Create Attendance Sheet</h2>
	<button  class="btn" onclick="location.href='{{ url('createattendancesheet') }}'">Create attendance sheet</button>
	@endif

@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
	
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop