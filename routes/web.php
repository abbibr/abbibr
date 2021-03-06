<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appniki;
use App\Http\Controllers\Test;
use App\Http\Controllers\contim;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\baza;
use App\Http\Controllers\Cars;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\mail;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EmpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/admin_kim',function()
{
    return "<h1>Admin - Ibrohim</h1>";
});

Route::match(['get','post'],'/jadval',function()
{
    $name=DB::table('jadval')->get();
    return view('jadval',compact('name'));
});

Route::match(['get', 'post'], 'cars', function () {
    $names=DB::table('cars')->get();
    return view('news',compact('names'));
});

Route::get('cars/car',function($value)
{
    $names=DB::table('cars')->find($value->id);
    dd($names);
    return view('news',compact('names'));
});
*/
// Route::redirect('/laravel','/cars');

/* Route::get('frameworks',function()
{
	//$frameworks=App\Models\Laravel::all();
	$frameworks=DB::table('laravel')->get();
	return view('backend',compact('frameworks'));
}); */


/* Route::get('mevalar',function() // asosiy
{
	//$meva=DB::table('mevalars')->get();
	$meva=App\Models\Mevalar::all(); # all()
	return view('backend',compact('meva'));
}); */

//Route::get('mevalar','mevalarController@index');

// Route::get('app_uchun','Appniki@abbibr');
Route::get('app_uchun/{ism}',[Appniki::class,'abbibr']);

Route::match(['get','post'],'nom/{index}',[Nom::class,'nomi']);

/* asosiy qism */
/* Route::match(['get','post'],'baza',function()
{
    // $name=DB::table('apps')->get();
    $name=App\Models\app::all(); #age();
    return view('app',compact('name'));
}); */

/* asosiy qism */
Route::get('/website',[Test::class,'main']);

Route::get('admin',function()
{
    return "<h1>Admin - Ibrohim!</h1>";
});

Auth::routes(); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dashboard', 'App\Http\Controllers\HomeController@dashboard')->middleware('auth');

Route::match(['get','post'],'takror',function()
{
	// $names=DB::table('_migratsita')->get();
	$names=App\Models\Takror::all();
	return view('takror.a',compact('names'));
});


// Route::get('controller',[baza::class,'a']);

// asosiy
Route::get('pagination',[PaginationController::class,'users']);

Route::get("/cars",[Cars::class,'form']);

Route::post('carsinsert',[Cars::class,'insert']);


// asosiy
Route::get('add',function()
{
    return view('addmember');
});
Route::post('add',[MemberController::class,'addData']);


/* Route::view('appbaza','appbaza');
Route::post('appbaza',[Appniki::class,'app']); */

// upload
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'index']);

Route::view('izoh','mail.index');

//Route::post('izoh',[mail::class,'index']);


Route::get('email',[MailController::class,'Sendmail']);
//qoshimcha
//Route::post('send-message',[MailController::class,'Sendmail2'])->name('contact.send');


// session - server side hisoblanadi
//Route::view('log','login');
Route::post('user',[UserAuth::class,'userLogin']);
Route::view('profile','profile');

Route::get('/log', function () {
    if(session()->has('user'))
    {
       return redirect('profile');
    }
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        // remove qilish
        session()->pull('user');
    }
    return redirect('/log');
});

Route::get('joins',[JoinController::class,'index']);

Route::get('join',[EmployeeController::class,'show']);


// eksport excel qism
Route::get('export',[EmployeController::class,'addEmployee']);

Route::get('xlsx',[EmployeController::class,'exportExcel']);

Route::get('csv',[EmployeController::class,'exportCSV']);


// download pdf
Route::get('table',[EmpController::class,'index']);
Route::get('download',[EmpController::class,'load']);
Route::get('table/{id}',[EmpController::class,'id']);
Route::get('load/{id}',[EmpController::class,'download']);


// import excel
Route::get('import',[EmployeController::class,'import']);
Route::post('ok',[EmployeController::class,'ok']);

Route::get('xlim',[EmployeController::class,'xlim']);
Route::post('ok',[EmployeController::class,'excelimport'])->name('excelimport');
