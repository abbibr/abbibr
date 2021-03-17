<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class Cars extends Controller
{
    public function form()
    {
        return view('cars');
    }
    function insert(Request $req)
    {
        # dd($_POST); // ma`lumot kevotganini tekshirish
        // dd($request);
        $cars=new Cars;
        // bazaga ma`lumot qo`shilyapti
        $cars->model=$request->input('model'); // input('models') - kiritilayotgan ning name i.
        $cars->name=$request->input('name');
        $cars->year=$request->input('year');
        $cars->save(); // bazaga kiritish
        $request->session()->flash('success','Mashina qo`shildi!'); // to`g`ri qo`shilganini tekshirish
        return redirect('/cars');
    }
}
