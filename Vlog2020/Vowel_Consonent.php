<?php
	if(isset($_POST['submit'])){
	$myltr = $_POST['myltr'];

	$ltrlower = strtolower($myltr);

	if($ltrlower == 'a' || $ltrlower == 'e' || $ltrlower == 'i' || $ltrlower == 'o' || $ltrlower == 'u') {

			echo "$myltr is Vowel";

	} else {
			echo "$myltr is Consonent";
	}
	}

?>

<form method="post" action="">
    <p><input type="text" name="myltr" placeholder="My Letter"></p>
    <input type="submit" name="submit" value="Vowel/Consonent">
     
</form>