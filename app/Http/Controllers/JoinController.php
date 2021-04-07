<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function index()
    {
        $data=DB::table('employee')
        ->join('company','employee.id','=','company.id')
        ->where('company.id',2)     
        ->get();
        return $data;
    }
}
