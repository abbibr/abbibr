<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		alert("Siz news bo`limidasiz!");
	</script>

	<h1>Hush kelibsiz admin:</h1>
	<?php
/* $a=array_rand($names);

		
		if($a==0)
		{
			echo "Sodir";
		}
		if($a==1)
		{
			echo "Dilorom";
		}
		if($a==2)
		{
			echo "Ibrohim";
		}
		if($a==3)
		{
			echo "Sarvinoz";
		}
		if($a==4)
		{
			echo "Sardor";
		}
		if($a==5)
		{
			echo "Robiya";
		}

*/
        foreach ($names as $value) {
			echo "<li><b>Car:</b> <a href='cars/$value->id'>".$value->name."</a></li>";
		}

?>

</body>
</html>