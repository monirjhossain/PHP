<?php 

	$country = array("Bangladesh"=>"Dhaka","India"=>"Dilhi","Australia"=>"Melboarn","Pakistan"=>"Lahor","Srilanka"=>"Colombo",);

	asort($country);


	foreach ($country as $key => $value) {
		echo " Country:" . $key . " || " . " Capital: ". $value ."<br>";
	}





 ?>