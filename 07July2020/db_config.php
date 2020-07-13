<?php  

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "classicmodels";

	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

	if(!$mysqli){
		die("Connection Failed");
	}else{
		echo "Connection Successfully";
	}
	echo "<hr>";

 ?>