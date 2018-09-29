<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
   public function helloWorld() 
   {
   		$url = request()->url();
   		$path = request()->path();
   		$queryString = request()->getQueryString();
   		$query = request()->query(); // array
   		$method = request()->method();
   		$ip = request()->ip();
   		$headers = request()->header();
   		$body = request()->getContent();
   		dd($body);
   }
}
