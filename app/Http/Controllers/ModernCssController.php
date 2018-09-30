<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModernCssController extends Controller
{
    public function partOne() 
    {
    	return view('modern_css.part_one');
    }
}
