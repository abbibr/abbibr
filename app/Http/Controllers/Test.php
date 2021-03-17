<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    function main()
    {
    	return view('posts.index');
    }
}
