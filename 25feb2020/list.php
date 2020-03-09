<?php

	$users = file('user.txt');

	foreach($users as $user) {
	
	$userlist = explode("|", $user);

	list($name, $area, $district) = $userlist;

	echo "Name: " .$name ."|". " Area: " .  $area ."|". "District: ". $district . "<br>";
	
	}

?>