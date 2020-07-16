<?php
require('clss.php');

$file = new File();

?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_FILES['myfile']['error']==0){
			$file->fileupload($_FILES['myfile']);

		}else{
			echo "select file than try";
		}
	}

	?>
	<form action="#" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" name="submit" value="upload">
	</form>

</body>
</html>