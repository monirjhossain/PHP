<?php

	$fname= array("Peter","Ben","Joe");

	$age = array("52","20","36");

	$c = array_combine($fname, $age);

	echo "<pre>";
	print_r($c);

	print_r($fname);
	print_r($age);
	
?>