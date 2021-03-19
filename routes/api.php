<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('humans',[HumanController::class,'getAll'])->name('getAll'); // ->name('getAll'); - buni qollamasayam boladi.  // chiqarish hammasini
Route::post('humans',[HumanController::class,'add'])->name('add'); // ma`lumot qo`shish
Route::get('human/{id}',[HumanController::class,'get'])->name('get'); // faqat bittasini ko`rish
Route::get('human/delete/{id}',[HumanController::class,'delete'])->name('delete'); // faqat bittasini o`chirish
Route::post('humans/{id}',[HumanController::class,'edit'])->name('edit'); // faqat bittasini edit qilish