	<?php 

	require("class.php");
	$file = new Image();

	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload files with PHP oop</title>
</head>
<body>
	
	<h3>File Upload</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="file" name="myfile"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Upload"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		if($_FILES['myfile']['error']==0){
			$file->uploadFile($_FILES['myfile']);
		}else{
			echo "Select file then try again";
		}
		
	}




?>