<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Variables</title>
</head>
<body>
</body>
<?php

		$name = "Abdur Rahim";
		$address = "Dhanmondi";
		$age = 27;
		$phone = "01926235088";

		//valid variable

		/*$abc;
		$_abc;
		$abc123;
		$abc-def;
		//invalid varrable

		/*$123abc
		$-abc;
		$abc def;
		$abc-def;*/

?>
<table border="1">
		<th>Name:</th>
		<th>Address:</th>
		<th>Age:</th>
		<th>Phone:</th>
	</tr>
	<tr>
		<td><?php echo $name; ?></td>
		<td><?php echo $address; ?></td>
		<td><?php echo $age; ?></td>
		<td><?php echo $phone; ?></td>
	</tr>
</table>
	
</body>
</html>