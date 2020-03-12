



<?php
	$country = array("Bangladesh"=>"Dhaka","Pakistan"=>"Lahor","India"=>"Dilhi","Srilanka"=>"Colombo","Nepal"=>"Kathmondu");

	ksort($country);

	foreach ($country as $key => $value) {
		print_r($country);
		echo "<pre>";
	}

	


?>