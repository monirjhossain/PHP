<h3>Sort the array by Capital City</h3>

<?php

	$country = array("Bangladesh"=>"Dhaka","Pakistan"=>"Lahor","India"=>"Dilhi","Srilanka"=>"Colombo","Nepal"=>"Kathmondu");

	asort($country);

	foreach ($country as $key => $value) {
		print_r($country);
		echo "<pre>";
	}

?>