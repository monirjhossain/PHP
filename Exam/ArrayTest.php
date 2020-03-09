



<?php
	$bal = array("Minar"=>50, "Zara"=>30, "Nazmul"=>60, "Masum"=>40);

	foreach ($bal as $user => $balance) {
		
		echo $user . " " . $balance . "<br>";

	}

	echo array_sum($bal);


?>