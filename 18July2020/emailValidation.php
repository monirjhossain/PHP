<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation</title>
</head>
<body>

	<form action="" method="POST">
		<label for="">Email Address</label><br>
		<input type="text" name="email1"><br>
		<label for="">Confirm Email Address</label><br>
		<input type="text" name="email2"><br>
		<input type="submit" name="submit" value="Validation">

	</form>
	
	<?php 

			if(isset($_POST['submit'])){
				$email1 = $_POST['email1'];
				$email2 = $_POST['email2'];

				if(empty($email1) || empty($email2)){

					echo "Email field cannot be empty";

				}elseif ($email1!=$email2) {

					echo "Both field should be same";

				}elseif (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {

					echo "Your email is not validate";

				}else{

					echo "Congratulations! Your Email is Validate";
				}
			}

	 ?>


	
</body>
</html>