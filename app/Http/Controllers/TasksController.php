<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;

class TasksController extends Controller
{
    public function index()
    {

    	$tasks=Task::orderBy('id', 'desc')->get();

    	return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {

    	return view('tasks.show', compact('task'));
    }

    public function create()
    {
    	return view('tasks.create');
    }

    public function submit(CreateTask $request)
    {
        if(request('completed')==null){
            $comp="0";
        } else {
            $comp=request('completed');
        }
        

        $task = new Task();
        $task->task_name=request('task_name');
        $task->completed=$comp;
        if(request('image')!= null){
            $task->imageUrl=request('image')->store('photos');
        }
        $task->save();

        $request->session()->flash('alert-success', 'Task has been saved');

      
       return redirect()->route('taskform');
    }

    public function taskupdate (Task $task)
    {
        return view('tasks.update', compact('task'));
    }

    public function update (CreateTask $request)
    {
        if(request('completed')==null){
            $comp="0";
        } else {
            $comp=request('completed');
        }
        $task = Task::find(request('id'));
        $task->task_name=request('task_name');
        $task->completed=$comp;
        if(request('image')!= null){
            $task->imageUrl=request('image')->store('photos');
        }
        $task->save();

        $request->session()->flash('alert-success', 'Task has been updated');

      
       return redirect('/tasks/update/'. request('id'));

    }

    public function destroy (Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
