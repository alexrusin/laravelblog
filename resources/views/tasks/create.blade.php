@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<h3>Create Task</h3>

		{!! Form::open(['url' => 'foo/bar']) !!}
		<div class="col-md-3">
		{!!Form::label('task_name', 'Task Name')!!}
		</div>
		<div class="col-md-9">
		{!!Form::text('task_name')!!}
		</div>
		<div class="col-md-3">
		{!!Form::label('completed', 'Completed')!!}
		</div>
		<div class="col-md-9">
		{!!Form::checkbox('completed', 'true', false)!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>

@endsection