<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>
<body>
	<?php 

		$days = ["Sunday","Monday","Tuesday","Thursday","Wednesday"];

		$fruits = array("Apple","Mango","Orange","Grap","Leche");

		print $days[0];
		print "<br>";
		echo $fruits[2].",";

		for($i = 0; $i<count($fruits); $i++) { 
			print $fruits[$i] . "<br>";
		}


	?>
</body>
</html>