@extends('layout')
   		
  @section('content')
      <ul>
   			@foreach ($tasks as $task)
   				<li><a href="{{env('APP_URL')}}/tasks/{{$task->id}}">{{$task->task_name}}</a><br>
   					<img src="{!!Storage::url($task->imageUrl)!!}" width="300" height="160">
   				</li>

   			@endforeach
   		</ul>
  @endsection

   