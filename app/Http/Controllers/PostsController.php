<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Posts;

class PostsController extends Controller
{
    
    public function index(Posts $posts) 
    {
    	$allPosts = $posts->all();

    	dd($allPosts);

    	return view ('posts.index', compact('allPosts'));
    }
}
