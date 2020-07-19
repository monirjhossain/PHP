<?php

	if(isset($_FILES['file'])){

		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		/*  Array
		
		(
		    [file] => Array
		        (
		            [name] => 88228472_1614332948714237_5001196117170323456_o.jpg
		            [type] => image/jpeg
		            [tmp_name] => G:\xampp\tmp\php9278.tmp
		            [error] => 0
		            [size] => 709597
		        )

		) */

	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];


	if(move_uploaded_file($file_tmp, "uploads/" . $file_name)){

		echo "file uploaded successfully" . "<br>";
		//echo "<img src='uploads/$file_name' height='300px' width='300px'>";

	}else{
		echo "file could not found";
	}



	}





?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file upload</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="file"><br>
		<input type="submit" name="submit"value="Upload">
	</form>
</body>
</html>