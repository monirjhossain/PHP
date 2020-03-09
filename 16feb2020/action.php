<?php

	if(isset($_REQUEST['submit'])){

	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";


	$first = $_REQUEST['FirstName'];
	$last = $_REQUEST['LastName'];
	$gender = $_REQUEST['gender'];
	$address = $_REQUEST['address'];
	$district = $_REQUEST['district'];

	echo "Name: " .$first." ".$last;
	echo "<br>";
	echo "Gender: " .$gender." ";
	echo "<br>";
	echo "Address: " .$address. " ";
	echo "<br>";
	echo "District: " .$district. " ";
	echo "<br>";


	}

	?>