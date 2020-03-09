<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Varibles PHP</title>
</head>
<body>
	<?php 

	$name = "Monir Hossain";
	$address = "Narayanganj";
	$age = "26";
	$phone = "01948283811";

	//valid variable
	$abc
	$_abc
	$abc123
	$abc_123

	//Invalid Variables
	$123abc
	$-abc
	$abc def
	$abc-def
	$ abc

	?>
	

	<table border="1">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Age</th>
			<th>Phone</th>
		</tr>
		<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php print $phone; ?></td>
		</tr>
	</table>
</body>
</html>