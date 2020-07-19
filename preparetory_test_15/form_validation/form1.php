<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		extract($_POST);
		if($name == '' || $email == '' || $age == '' || $phone == ''){
            echo "Please fill up the form";

	}else{
		extract($_POST);

		//Name Field Validation
		if(preg_match("/[a-zA-Z ]{4,15}/", $name)){
			echo "<p>Your name: " . $name . " is valid </p> ";
		}else{
			echo "<p> Your name: " . $name . " is invalid </p> ";
		}

		//Email Field Validation
		if (filter_var($email, FILTER_VALIDATE_EMAIL)==true) {
			echo "<p> Your email: " . $email . " is valid </p> ";
		}else{
			echo "<p> Your email: " . $email . " is invalid </p> ";
		}

		//Age Field Validation
		if(preg_match("/[0-9]{1,2}/", $age)){
			echo "<p>Your age: " . $age . " is valid </p> ";
		}else{
			echo "<p> Your age: " . $age . " is invalid </p> ";
		}

		//Phone Field Validation

		if(preg_match("/[0-9]{9,12}/", $phone)){
			echo "<p>Your phone: " . $phone . " is valid </p> ";
		}else{
			echo "<p> Your phone: " . $phone . " is invalid </p> ";
		}

	}

}
	
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form1</title>
</head>
<body>
	<h2>Form Validation</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<table>
			<tr>
				<td>Name:</td>
				<td>
					<input type="text" name="name" placeholder="enter your name"
					value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
				</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>
					<input type="text" name="email" placeholder="enter your email"
					value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
				</td>
			</tr>
			<tr>
				<td>Age:</td>
				<td>
					<input type="text" name="age" placeholder="enter your age"
					value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>">
				</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td>
					<input type="text" name="phone" placeholder="enter your phone"
					value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="SUBMIT">
					<input type="reset" name="reset" value="RESET">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>