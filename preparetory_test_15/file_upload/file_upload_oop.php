<?php 
require('file_upload_class.php');

$file = new File();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP File Upload</title>
</head>
<body>
	<?php

		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			if($_FILES['myfile']['error'] == 0){
				$file->uploadFile($_FILES['myfile']);
			}else{

				echo "Select a file then try";
			}
		}



	?>

	<h2>File upload</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="UPLOAD">
	</form>

</body>
</html>