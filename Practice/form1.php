<?php 
	include "class2.php";
	$file = new File();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File uoload</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile"><br>
		<input type="submit" name="submit" value="Upload">
	</form>

	<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_FILES['myfile']['error']==0){
			$file->fileUpload($_FILES['myfile']);
		}else{
			echo "Select a file then try";
		}
	}




	 ?>

</body>
</html>