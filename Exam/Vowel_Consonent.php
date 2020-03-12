<?php
	if(isset($_POST['submit'])){

	$myltr = $_POST['myltr'];

	$ltrlower = strtoupper($myltr);

	if($ltrlower == 'a' || $ltrlower == 'e' || $ltrlower == 'i' || $ltrlower == 'o' || $ltrlower == 'u'){

		echo "$myltr is vowel";
	}else{
		echo "$myltr is Consonent";
	}
	}

?>

<form action="" method="POST">
	
	<p><input type="text" name="myltr" placeholder="My Letter"></p>
	<input type="submit" name="submit" value="Vowel/Consonent">
</form>