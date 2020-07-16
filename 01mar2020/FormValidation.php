<?php

if ($_SERVER['REQUEST_METHOD'] = "POST") {

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$phone = $_POST['phone'];
		$error = false;

		if ($name == "" || $email == "" || $age == "" || $phone =="") {
				echo "Empty Data not allow<br>";
				$error = true;
			} else {

				if (!preg_match("/^[a-zA-Z ]{4,20}/", $name)) {
					echo "Name not valid <br>";
					$error = true;
				}
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Email Not Valid <br>";
					$error = true;
				}
				if (!preg_match("/^[0-9]{1,3}/", $age)) {
					echo "Age not valid<br>";
					$error = true;
				}
				if(!preg_match("/^[0-9+-]{10,15}/", $phone)){
					echo "Phone no less than 12 digit <br>";
					$error = true;
				}


				function sanitize($value){
					$value = htmlspecialchars($value);
					$value = trim($value);
					$value = strip_tags($value);
					$value = stripslashes($value);
					return $value;
				}

				if ($error == false) {
					
					echo "Data Validate <br>"."Name : " . sanitize($name) ."<br>"."Email : " .sanitize($email)."<br>"."Age : " .sanitize($age)."<br>"."Phone : " .sanitize($phone);
				}


			}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
</head>
<body>
	<form action="" method="post">

		Name : <input type="text" name="name" placeholder="Name"><br>
		email : <input type="email" name="email" placeholder="email"><br>
		age : <input type="number" name="age" placeholder="age"><br>
		phpne : <input type="text" name="phone" placeholder="phpne"><br>
		<input type="submit" name="submit" value="Submit"><br>
	</form>
</body>
</html>