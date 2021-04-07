<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function show()
    {
        $data=DB::table('employee')->join('company','employee.id','=','company.id')
        // ->select('employee.*')
        ->get();
        /* $data=DB::table('employee')->join('company','employee.id','=','company.id')
        ->select('employee.*')
        ->where('employee.id',1)
        ->get(); */
        return $data;
    }
}
