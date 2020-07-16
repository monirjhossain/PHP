<?php 
require('class.file.php');

$file = new File();

?>
<!DOCTYPE html>
<html>
<head>
<title>File uploading with PHP OOP</title>
</head>
<body>
<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		if($_FILES['myfile']['error']==0) {
			
			$file->uploadFile($_FILES['myfile']);
			
		} else {
			echo "Select a file then try";
		}
		
	}
?>
<h2>File upload</h2>
<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="myfile">
	<input type="submit" name="submit" value="UPLOAD">
	
</form>

</body>
</html>
