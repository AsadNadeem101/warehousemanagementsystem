@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Update Password</h1>
@stop

@section('content')
	{!! Form::open(['route' => 'change_password','method' => 'post']) !!}
		{!! Form::token(); !!}
		<table class="table">
			<tr>
				<th width="10%">{!! Form::label('Old Password') !!}</th>
				<td>
					{!! Form::password('old_password',['class' => 'form-control old_password','placeholder' => 'Old password']); !!}
					@if(isset($error))
						<span style="color: red">{{$error}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<th width="10%">{!! Form::label('New Password') !!}</th>
				<td>
					{!! Form::password('new_password',['class' => 'form-control new_password','placeholder' => 'New password']); !!}
				</td>
			</tr>
			<tr>
				<th width="10%">{!! Form::label('Confirm Password') !!}</th>
				<td>
					{!! Form::password('confirm_password',['class' => 'form-control confirm_password','placeholder' => 'Confirm password']); !!}
				</td>
			</tr>
			<tr>
				<th width="10%"><button type="submit" onclick="return doValidate()" >Update</button></th>
			</tr>
		</table>

	{!! Form::close() !!}
@stop

@section('css')
<style type="text/css">
	.form-inline {
		display: block
	}
</style>	
@stop

@section('js')
	<script type="text/javascript">
		$(function() {

		})
		function doValidate()
		{
			var old_password = $('.old_password').val();
			var new_password = $('.new_password').val();
			var confirm_password = $('.confirm_password').val();
			if(old_password.length < 1)
			{
				Swal.fire('Old password field can not be blank');
				return false;
			}
			if(new_password.length < 1)
			{
				Swal.fire('New password field can not be blank');
				return false;
			}
			if(confirm_password.length < 1)
			{
				Swal.fire('Confirm password field can not be blank');
				return false;
			}
			if(new_password.length < 8)
			{
				Swal.fire('Password length should greater than 8');
				return false;
			}
			if(new_password != confirm_password)
			{
				Swal.fire('Password mismatch');
				return false;
			}
		}
	</script>
@stop
