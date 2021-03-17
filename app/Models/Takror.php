<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takror extends Model
{
    use HasFactory;
    public static function index()
    {
    	return static::where('id',1)->get();
    }
}
