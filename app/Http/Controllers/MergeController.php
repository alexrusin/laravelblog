<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawMat;

class MergeController extends Controller
{
    public function index()
    {

    	$mats=RawMat::all();
    	

    	return view('merge.index', compact('mats'));
    }
}
