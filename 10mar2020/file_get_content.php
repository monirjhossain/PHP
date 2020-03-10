<?php
 // Read the file into an array
 $users = file_get_contents('users1.txt');

 //print_r($users);
 
$usersArray = explode("\n", $users);

	foreach ($usersArray as $user) {
		list($name, $email) = explode(",", $user);
		echo "Name: " . $name . " " . "Email: " . $email . "<br>";
	}

	

	echo "<pre>";

	print_r($usersArray);