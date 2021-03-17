<?php

echo "<table border=1 cellpadding=5>";
echo "<tr><th>Id</th><th>Name</th><th>Age</th><th>Date</th></tr>";

foreach ($name as $value) {
	echo "<tr><td>".$value->id."</td><td>".$value->name."</td><td>".$value->age."</td><td>".$value->created_at."</td></tr>";
}

echo "</table>";

?>