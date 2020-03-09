<?php

	$colors = array("Red","Blue","Green");

	list($color1, $color2, $color3) = $colors;

	echo $color1;

	echo "<br>";


	function userInfo(){
		$user[]= "Md. Monir Hossain";
		$user[]= "Narayanganj";
		$user[]= "md.mopnirjhossain@gmail.com";

		return $user;
	}

	list($name,$address,$email) = userInfo();

	echo "Student name is {$name}  <br>  and his address is {$address} <br>  and his email is {$email}";

?>