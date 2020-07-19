<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
</head>
<body>
	<fieldset>
		<legend>Form Validation</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" 
					value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" 
					value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" id="" cols="18" rows="6" 
					value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>"></textarea></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="text" name="phone" 
					value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	</fieldset>


	<?php 

	if($_SERVER['REQUEST_METHOD']=="POST"){

		extract($_POST);
		if($name == '' || $email == '' || $address == '' || $phone == ''){
			echo "Please fill the field";
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
		if(preg_match("/[0-9]{1,2}/", $address)){
			echo "<p>Your age: " . $address . " is valid </p> ";
		}else{
			echo "<p> Your age: " . $address . " is invalid </p> ";
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
</body>
</html>