<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login form</title>
</head>
<body>
	<?php
	if(isset($_REQUEST['submit'])){

		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];

	echo "Email: " . $email . " ";
	echo "<br>";
	echo "Password: " . $password . " ";
	echo "<br>";
	}


	?>

	<h2>Login form</h2>
	<form action="" method="post">
		<label for="">Email:</label>
		<input type="email" name="email" placeholder="Enter your email"><br><br>
		<label for="">Password:</label>
		<input type="password" name="pass" placeholder="Enter your Password"><br><br>
		<input type="submit" name="submit">
		

	</form>
</body>
</html>