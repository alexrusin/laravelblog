<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function create()
    {   
    	$projects = Project::all();
    	return view('projects.create', compact('projects'));
    }

    public function store()
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'description' => 'required'
    	]);

    	Project::forceCreate([
    		'name' => request('name'),
    		'description' =>request('description')
    	]);

    	return ['message' => 'Project Created'];
    }
}
