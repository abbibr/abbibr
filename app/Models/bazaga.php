<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bazaga extends Model
{
    use HasFactory;
    function b()
    {
    	$names=App\Models\bazaga::all();
    }
}
