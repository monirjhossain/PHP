<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<form ation="" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="check">
    </form>


<?php

	if(isset($_POST['submit'])){
		$ltr = $_POST['name'];
		
		function factorial($n){
			if ($n==0){
				return 1;
				}
				return $n * factorial($n-1);
			}
			echo factorial($ltr);
	}
			
	




?>

	
</body>
</html>