<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req)
    {
    	// kiritilgan ma`lumotni olish va chiqarish
    	// return $req->input();
    	$data=$req->input();
    	$req->session()->put('user',$data['user']);
    	// faqat user ni chiqarish
    	// echo session('user');
    	return redirect('profile');
    }
}
