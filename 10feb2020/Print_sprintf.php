<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sprintf</title>
</head>
<body>
	<?php
		$str1 = "Nine";
		$str2 = "Beijing";
		//printf("There are %s million bicycles in %s.",$str1,$str2);
		 
	?> 

	<?php
	$number = 200;
	$str = "Dhaka";
	$txt = sprintf("There are %u million bicycle in %s.",$number,$str);
	//echo $txt;

	echo $cost = sprintf("Total cost is $%.3f", 43.2)

	?>
</body>
</html>