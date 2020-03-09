
<form method="post">
	<input type="text" name="n">
	<input type="submit" name="submit" value="submit">
	
</form>


<?php
	function factorial($n) {
		if($n == 0) {
			return 1;
		}
		$previous = factorial($n-1);
		$current = $n * $previous;
		return $current;
		
	}


?>

<?php 
	if(isset($_POST['n'])) {
		$n =  $_POST['n'];
		
		$r = factorial($n);
		
		echo "<h3>Factorial number for $n = $r</h3>";
	}
?>
