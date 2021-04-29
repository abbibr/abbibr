<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;
use App\Imports\ExcelImport;

class EmployeController extends Controller
{
    public function addEmployee()
    {
        $employees=[
        [
            'name'=>'Alice',
            'email'=>'Alice@mail.ru',
            'phone'=>'123456789',
            'salary'=>'2000',
            'department'=>'mail'
        ],
        [
            'name'=>'Alice',
            'email'=>'Alice@mail.ru',
            'phone'=>'123456789',
            'salary'=>'2000',
            'department'=>'mail'
        ],
        [
            'name'=>'Alice',
            'email'=>'Alice@mail.ru',
            'phone'=>'123456789',
            'salary'=>'2000',
            'department'=>'mail'
        ]
    ];
    Employee::insert($employees);
    return "True";
    }
    
    public function exportExcel()
    {
        return Excel::download(new EmployeeExport,'excel.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new EmployeeExport,'csv.csv');
    }
    public function import()
    {
        return view('import');
    }
    public function ok(Request $req)
    {
        Excel::import(new EmployeeImport,$req->file);
        return "Success";
    }
    public function xlim()
    {
        return view('import');
    }
    public function excelimport(Request $req)
    {
        Excel::import(new ExcelImport,$req->file);
        return "Success";
    }
}
