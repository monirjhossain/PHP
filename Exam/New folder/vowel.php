<?php
	if(isset($_POST['submit'])){
	$myltr = $_POST['myltr'];
	$change = strtolower($myltr);
	
	switch($change){
		case "a":
		case "e":
		case "i":
		case "o":
		case "u":
		echo " $change is vowel";
		break;
		default:
		echo " $change is consonant";
		
		
		}


	}

?>

<form method="post" action="">
    <p><input type="text" name="myltr" placeholder="My Letter"></p>
    <input type="submit" name="submit" value="Vowel/Consonent">
     
</form>