<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If, else, Elseif</title>
</head>
<body>
	<?php
/*
		$x = null;

		if ($x) {
			echo "x variable is alive";
		}else{
			echo "x variable is not assigned value";
		}
		*/

/*
		$x = 15;
		$y = 20;

		if ($x > $y) {
			echo "X is greater than Y";
		}else if($x < $y){
			echo "Y is greater than X";
		}else{
			echo "X  and Y are equal";
		}
*/

		$x = 50;
		switch ($x) {
			case $x >= 80:
				echo "A+";
				break;
			case $x >= 70:
				echo "A";
				break;
			case $x >= 60:
				echo "A-";
				break;
			case $x >= 50:
				echo "B";
				break;
			default:
			echo "Fail";
			
		}

	?>
</body>
</html>