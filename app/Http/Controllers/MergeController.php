<?php

namespace App\Http\Controllers;

use App\RawMat;
use App\User;
use Illuminate\Http\Request;

class MergeController extends Controller
{
    public function index()
    {

    	$mats=RawMat::all();
    	

    	return view('merge.index', compact('mats'));
    }

    public function ajaxShow()
    {
    	


    	return view('merge.ajax');
    }
}
