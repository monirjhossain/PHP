<?php 

	include "class1.php";
	$file = new File();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File upload</title>
</head>
<body>
	<?php 

		if ($_SERVER['REQUEST_METHOD']=="POST") {
			if ($_FILES['myfile']['error']==0) {
				$file->FileUpload($_FILES['myfile']);
			}else{
				echo "Select file then try";
			}
		}

	 ?>

	 <form action="" method="post" enctype="multipart/form-data">
	 	<input type="file" name="myfile">
	 	<input type="submit" name="submit" value="Upload">
	 </form>
</body>
</html>