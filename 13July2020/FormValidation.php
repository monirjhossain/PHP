<?php 


if ($_SERVER['REQUEST_METHOD'] = "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	// echo $name.$email.$age.$phone;
	$error = false;

	function sanitize($value){
		$value = htmlspecialchars($value);
		$value = trim($value);
		$value = strip_tags($value);
		$value = stripslashes($value);
		return $value;
	}


	if ($name == "" || $email == "" || $age == "" || $phone =="") {
			echo "Empty Data not allow<br>";
			$error = true;
		} else {

			if (!preg_match("/^[a-zA-Z]/", $name)) {
				echo "Name not valid <br>";
				$error = true;
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Email Not Valid <br>";
				$error = true;
			}
			if ($age >= 999) {
				echo "Age not valid <999 <br>";
				$error = true;
			}
			if(strlen($phone) > 12){
				echo "Phone no less than 12 digit <br>";
				$error = true;
			}

			if ($error == false) {
				echo "Data Validate <br>"." Name : " . sanitize($name) ."<br>". 							"Email : " .sanitize($email)."<br>"."Age : " .sanitize($age)."<br>"."Phone : " .sanitize($phone);
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
		phone : <input type="text" name="phone" placeholder="phone"><br>
		<input type="submit" value="Submit"><br>
	</form>
</body>
</html>