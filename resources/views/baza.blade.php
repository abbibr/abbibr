<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bazaga;

class baza extends Controller
{
	function a()
	{
		foreach ($names as $value) {
			echo $value->Name."<br>";
		}
	}
}
?>