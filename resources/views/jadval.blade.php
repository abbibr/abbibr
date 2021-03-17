<?php

foreach ($name as $value) {
	echo "<h1> Siz jadval nomli bo`limdasiz! </h1>";
	echo "<ul><li>".$value->id."/".$value->yosh."/".$value->name."/".$value->created_at."</ul>";
}

?>