<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array functions</title>
</head>
<body>
	<?
	/*$cars = array("Volvo","Corolla","BMW","Toyota");

	//count function

	echo count($cars);*/

	/*$cars = array(array("Volvo",36,45),
		array("Corolla", 15,25),
		array("BMW", 65,42),
		array("Toyota", 42,89));

		//multidimentsion array.

	echo $cars[0][0];
	echo $cars[0][1];*/

	$cars = array("Volvo","Corolla","BMW","Toyota");

	//implode

	$string = implode(" / ", $cars);
	echo $string;


	?>
</body>
</html>