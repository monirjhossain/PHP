<form method="POST">
	<input type="text" name="x">
	<input type="submit" name="submit" value="submit">
	
</form>


<?php

	if(isset($_POST['submit'])){
		$x = $_POST['x'];

	function factorial($n){
		if($n==0)
		{
			return 1;
		}
			return $n * factorial($n-1);
	}
	echo factorial($n);
	}

?>