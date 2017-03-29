@extends('layout')
   		<style>
   			#myform {
   				display:inline;
   			}
   			.update-task {
   				display:inline;
   			}
   		</style>
  @section('content')
  		<div class="row">
  			<div class="col-md-12">
   				<h3>{{$task->task_name}}</h3>
   			</div>
   		</div>
   		<img src="{!!Storage::url($task->imageUrl)!!}" width="300" height="160"><br><br>
   		
   		{{Form::open(array('method'=>'GET', 'route' => array('taskupdate', $task->id), 'class'=>'update-task'))}}
		{{Form::submit('Edit Task', array('class'=>'btn btn-primary'))}}
		{{Form::close()}}

   		{{Form::open(array('method'=>'GET', 'route' => array('tasks.destroy', $task->id), 'id'=>'myform'))}}
		{{Form::submit('Delete Task', array('class'=>'btn btn-danger'))}}
		{{Form::close()}}
   		<h4><a href="{{env('APP_URL')}}/tasks">View All Tasks</a></h4>


   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
   
   <script>
$(document).ready(function(){
    $('#myform').submit(function(e){
      e.preventDefault();
      

        url = $(this).parent().prevObject.attr('action');
        BootstrapDialog.confirm('Are you sure you want to delete?', function(result){
            if(result) {
                window.location.replace(url);

            }
        });
    });

});
</script>


   @endsection

