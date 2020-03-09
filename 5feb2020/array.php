<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>
<body>
	<?php

	$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"];

	$fruits = array("Mangro", "Banana", "Apple", "Orange");

	print $days[0];
	print "<br>";
	print $days[1];
	print "<br>";
	print $fruits[3];
	print "<br>";

	for($i = 0; $i<count($fruits); $i++){
		echo $fruits[$i] . "<br>";
	}


	?>
	
</body>
</html>