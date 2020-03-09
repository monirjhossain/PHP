<?php

	$num = 47;
	if($num % 2 == 0){
		echo "Its a Even number";
	}else{
		echo "Its a Odd number";
	}

	for ($i=0; $i < $num; $i++) { 
		if($i %2 == 0){
			$even .= $i . ",";
		}else{
			$odd .= $i . ",";
		}
	}

	echo "The even number is $even <br>";
	echo "The even number is $odd";

?>