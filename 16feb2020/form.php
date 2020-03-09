<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php

	if(isset($_REQUEST['submit'])){

	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";


	$first = $_REQUEST['FirstName'];
	$last = $_REQUEST['LastName'];
	$gender = $_REQUEST['gender'];
	$address = $_REQUEST['address'];
	$district = $_REQUEST['district'];

	echo "Name: " .$first." ".$last;
	echo "<br>";
	echo "Gender: " .$gender." ";
	echo "<br>";
	echo "Address: " .$address. " ";
	echo "<br>";
	echo "District: " .$district. " ";
	echo "<br>";


	}

	?>
	<h2>Data sending to server using form</h2>
	<form action="action.php" method="POST">
		<label for="">First Name:</label>
		<input type="text" name="FirstName" placeholder="enter first name"><br><br>
		<label for="">Last Name:</label>
		<input type="text" name="LastName" placeholder="enter last name"><br><br>
		<label for="">Gender:</label>
		Male<input type="radio" name="gender" value="Male">
		Female<input type="radio" name="gender" value="Female">
		Others<input type="radio" name="gender" value="Others"><br><br>
		<label for="">Address:</label>
		<textarea name="address" id="" cols="21" rows="7"></textarea><br><br>
		<label for="">District</label>
		<select name="district" id="">
			<option value="">Select district</option>
			<option value="Narayanganj">Narayanganj</option>
			<option value="Comilla">Comilla</option>
			<option value="Barishal">Barishal</option>
		</select><br><br>
		<input type="submit" name="submit" value="SEND">
	</form>
</body>
</html>