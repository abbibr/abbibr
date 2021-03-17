<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class Appniki extends Controller
{
    public function abbibr($ism)
    {
    	define('X', 'Laravel');
        echo X;
    	/* return ['name'=>'Ibrohim','age'=>15]; */
    	// return $ism; // birinchi return kelsa faqat ozi chiqadi, undan keyingisi emas!
    	echo " - the best framework!";
    }
    public function app(Request $req)
    {
        $app=new App;
        $app->name=$req->name;
        $app->age=$req->age;
        $app->created_at=$req->created_at;
        $app->updated_at=$req->created_at;
        $app->save();  // bazaga kiritish
        return redirect('appbaza');
    }
    public function appga(Request $request)
    {
        dd($request); // ma`lumot kevotganini tekshirish
    }
}
