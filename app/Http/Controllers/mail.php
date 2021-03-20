<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mail extends Controller
{
    function index()
    {
        return view('mail.index');
    }
}
