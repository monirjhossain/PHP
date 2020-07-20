<?php 

		if($_SERVER['REQUEST_METHOD']=='POST'){
			$error = false;
			extract($_POST);

			if($name==''|| $email==''|| $address==''|| $phone==''){
				echo "Fill the field";
			}else{
				//extract($_POST);

				if(!preg_match("/[a-zA-Z]{4,14}/", $name)){
					echo "Your name $name is invalid";
					$error = true;

				}if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Your email $email is invalid";
					$error = true;

				}if (!preg_match("/[a-zA-Z]{4,20}/", $address)) {
					echo "Your address $address is invalid";
					$error = true;

				}if (!preg_match("/[0-9-_+]{9,12}/", $phone)) {
					echo "Your phone number $phone is invalid";
					$error = true;
				}if($error==false){
					echo "Form validation success <br>";
					echo "Name:" . $name ."<br>";
					echo "Email:" . $email ."<br>";
					echo "Address:" . $address ."<br>";
					echo "Phone:" . $phone ."<br>";
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
		Name <input type="text" name="name" placeholder="input name"><br>
		Email <input type="text" name="email" placeholder="input email"><br>
		Address <textarea name="address" id="" cols="30" rows="10" placeholder="input address"></textarea><br>
		Phone <input type="text" name="phone" placeholder="input Number"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>