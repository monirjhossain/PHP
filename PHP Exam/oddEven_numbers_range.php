<?php
	if(isset($_POST['submit'])) {
	
	$n1 = $_POST['sn'];
	$n2 = $_POST['en'];
	echo "<p> below Odd and Even numbers are between $n1 and $n2</p>";
	for($i = $n1; $i<=$n2; $i++) {
		
		if ($i%2==0) {
			echo "<div> $i is the number even </div>"; 
		}
		else {
			echo "<div> $i is the number odd </div>"; 
		}			
	}	
}	
?>

<form method="post" action="">
	<p><input type="text" name="sn" placeholder="Starting Number"></p>
	<p><input type="text" name="en" placeholder="Ending Number"></p>
	<input type="submit" name="submit" value="Odd/Even Numbers">
	
</form>