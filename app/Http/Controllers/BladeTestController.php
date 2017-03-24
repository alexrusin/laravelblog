<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTestController extends Controller
{
    
	public function __invoke()
	{
		$name = null;

		return view('bladeview', compact('name'));
	}

}
