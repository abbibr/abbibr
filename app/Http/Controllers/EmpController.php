<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class EmpController extends Controller
{
    public function index()
    {
        $data=Employee::all();
        return view('employee',compact('data'));
    }
    public function load()
    {
        $data=Employee::all();
        $data=PDF::loadView('employee',compact('data'));
        return $data->download('pdf.pdf');
        // dd($data);
    }
}
