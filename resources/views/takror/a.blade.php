<?php

echo "<caption>OILAM:</caption>";
echo "<table border=1 cellpadding=5>";
echo "<tr><th>Id</th><th>Name</th><th>Date</th></tr>";

foreach ($names as $value) {
	echo "<tr><td>".$value->id."</td><td>".$value->name."</td><td>".$value->created_at."</td></tr>";
}

echo "</table>";

?>