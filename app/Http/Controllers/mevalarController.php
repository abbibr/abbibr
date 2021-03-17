<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mevalarController extends Controller
{
    public function index()
    {
    	$meva=App\Models\Mevalar::id(); # all()
	    return view('backend',compact('meva'));
    }

}
