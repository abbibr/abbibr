<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mevalar extends Model
{
    use HasFactory;
    public static function id()
    {
    	return static::where('id',1)->get(); // faqat id=1 bo`lganini qaytaradi
    	// SELECT * FROM mevalars WHERE id=1
    }
}
