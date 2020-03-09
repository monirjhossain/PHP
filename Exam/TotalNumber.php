<?php

	$students = array(array("MCQ"=>40, "Descriptive"=>37, "Evidence"=>30),
				array("MCQ"=>28, "Descriptive"=>40, "Evidence"=>40));


		foreach ($students as $mark){
			$total = $mark["MCQ"] + $mark["Descriptive"];
			echo "MCQ: " . $mark["MCQ"] . " Descriptive: " . $mark["Descriptive"] . " Total ". $total;
			if($total>=70) {echo " So You are Pass.";} else{echo " So You are fail.";}
			echo "<br>";
		}


?>

