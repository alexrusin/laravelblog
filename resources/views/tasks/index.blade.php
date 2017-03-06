@extends('layout')
   		
  @section('content')
      <ul>
   			@foreach ($tasks as $task)
   				<li>{{$task->task_name}}</li>

   			@endforeach
   		</ul>
  @endsection

   