<?php

	if(isset($_POST['submit'])){
		$x = $_POST['x'];

	function factorial($n){
		if($n == 0){
			return 1;
		}
		return $n * factorial($n-1);
	
	}
	echo factorial($x);
	
	}
?>

	<form action="" method="POST">
		<input type="text" name="x">
		<input type="submit" name="submit" value="Check Factorial">
	</form>