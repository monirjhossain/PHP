
<?php 

	$db = new mysqli('localhost','root','','mycompany');

	if(isset($_POST['submit'])){
		$password = $_POST['pass'];
		$username = $_POST['username'];

	$result = $db->query("SELECT * FROM users WHERE password='$password' AND username='$username'");
	
	//echo $result->num_rows;

	if($result->num_rows>0){
		echo "Login have been successfully";
	}else{
		echo "Username and Password doesn't match";
	}
}


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User login</title>
</head>
<body>
	<h2>Login form</h2>
	<form action="" method="post">
		Username <input type="text" name="username" placeholder="Username"><br>
		Password <input type="password" name="pass" placeholder="Password"><br>
		 <input type="submit" name="submit" value="Submit"><br>
	</form>
</body>
</html>