<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Entry form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--jquery-->
	<script src="js/jquery.min.js"></script>
	<!--bootstrap.min.js-->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<form action="" method="POST">
		<div class="form-group">
		<label for="">Name:</label>
		<input type="text" name="name" class="form-control" placeholder="Enter your name">
		</div>
		<div class="form-group">
		<label for="">Email:</label>
		<input type="email" name="email" class="form-control"  placeholder="Input email">
		</div>
		<div class="form-group">
		<label for="">Phone:</label>
		<input type="text" name="phone"  class="form-control" placeholder="Enter your number">
		</div>
		<div class="form-group">
		<input type="submit" name="submit"  class="btn btn-primary" value="SAVE">
		</div>
	</form>
	</div>

	<?php
		extract($_POST);
		if(isset($_POST['submit'])){

		include("db_config.php");

		$sql = "INSERT INTO primary_info(st_id, st_name,st_email, st_phone) VALUES (NULL, '$name', '$email','$phone')";

		$row = mysqli_query($con, $sql);

		if($row){
			echo "<h2>Data insert successfully</h2>";
		}

		}



	?>
</body>
</html>