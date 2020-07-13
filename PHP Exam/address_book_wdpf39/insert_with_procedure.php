<?php $db =	new mysqli("localhost", "root", "", "address_book_wdpf39"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Info Entry</title>
</head>
<body>
	<h2>Entry Form</h2>
<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){

		extract($_POST);

	//$sql = "INSERT INTO student_info VALUES(NULL, '$st_name', '$st_email', '$st_mobile', '$st_gender')";

		$ok =	$db->query("CALL insert_student_info('$st_name', '$st_email', '$st_mobile', '$st_gender')");
		if($ok) {echo "Data Inserted";}

	}
?>
	<form action="" method="post">
		<input type="text" name="st_name" placeholder="Enter your name" ><br>
		<input type="text" name="st_email" placeholder="Enter your Email" ><br>
		<input type="text" name="st_mobile" placeholder="Enter your Mobile" ><br>
		Gender <br>
		Male<input type="radio" name="st_gender" value="Male" >
		Female<input type="radio" name="st_gender" value="Female" >
		<br>
		<input type="submit" name="submit" value="SUBMIT">
	</form>
	
</body>
</html>