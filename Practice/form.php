<?php 
	include "classUpload.php";
	$file = new File();


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File uploading</title>
</head>
<body>
	
	<?php 

	if($_SERVER['REQUEST_METHOD']=="POST"){
		if($_FILES['myfile']['error']==0){
			$file->fileUpload($_FILES['myfile']);
		}else{
			echo "Select file then upload";
		}
	}



	 ?>


	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="Upload">
	</form>
</body>
</html>