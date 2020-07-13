<?php 
//require('class.file.php');
class File {
		
		private $supportFormats = ['image/png', 'image/jpeg', 'image/jpg'];
				
		public function uploadFile($file){
			
			if(in_array($file['type'], $this->supportFormats)) {
			
			move_uploaded_file($file['tmp_name'], 'uploads/'. $file['name']);

			echo "File has been uploaded";
			}
			else {
				die("File format is not supported");	
			}	
	}
}	

$file = new File();


?>

<!DOCTYPE html>
<html>
<head>
<title>File uploading with PHP OOP</title>
</head>
<body>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		if($_FILES['myfile']['error'] == 0) {
			
			$file->uploadFile($_FILES['myfile']);
			
		} else {
			echo "Select a file then try";
		}
	}
?>

<h2>File upload</h2>
<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="myfile">
	<input type="submit" name="submit" value="UPLOAD">
	
</form>

</body>
</html>



