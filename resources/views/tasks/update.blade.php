<style>
	.row{
		margin-bottom:10px;
	}
	.my-submit {
		margin-top:20px;
	}
</style>
@extends('layout')

@section('content')

		<div class="row">
			 @include('alertmsg')
			<h3>Update Task</h3>
		</div>
		
		{!! Form::open(['route' => 'update', 'files' => true]) !!}
		{!! Form::model($task) !!}
		<div class="row">
			<div class="col-md-3">
			{!! Form::hidden('id') !!}
			{!!Form::label('task_name', 'Task Name')!!}
			</div>
			<div class="col-md-9">
			{!!Form::text('task_name')!!}
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
			{!!Form::label('completed', 'Completed')!!}
			</div>
			<div class="col-md-9">
			{!!Form::checkbox('completed', 1, $task->completed==1?true:false)!!}
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
			{!!Form::label('image', 'Upload Image')!!}
			</div>
			<div class="col-md-9">
			{!!Form::file('image')!!}
			</div>
		</div>
		<div class="row">
			 <div class="col-md-3">
                @if (count($errors) > 0)
	        		<ul>
	           			 @foreach ($errors->all() as $error)
	                		<li>{{ $error }}</li>
	            		@endforeach
	       			 </ul>
    			@endif
            </div>
			<div class="col-md-9">
				<img src="{!!Storage::url($task->imageUrl)!!}" width="300" height="160"><br>
				{!!Form::submit('Update Task', ['class' => 'btn btn-primary my-submit'])!!}
				 
			</div>
		</div>
		{!! Form::close() !!}
	<h4><a href="{{env('APP_URL')}}/tasks">View Tasks</a></h4>
	

@endsection