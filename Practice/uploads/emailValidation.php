<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation</title>
</head>
<body>
	<?php 

		if(isset($_POST['email'])==true && empty($_POST['email'])==false){
			$email = $_POST['email'];
			if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
				echo "Your $email address is validate";
			}else{
				echo "You have putted invalid email";
			}
		}


	 ?>
	<form action="" method="POST">
		<label for="">Email:</label>
		<input type="text" name="mail"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>