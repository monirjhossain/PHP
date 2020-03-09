<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Method</title>
</head>
<body>
	<a href="get.php?name='Shahin' &address='Motijhil' &phone='01948283811'">Test Get Method</a>

	<?
	//print_r($_GET);

		echo "<br>";
	echo $_GET['name'];
		echo "<br>";
	echo $_GET['address'];
		echo "<br>";
	echo $_GET['phone'];
	?>
</body>
</html>