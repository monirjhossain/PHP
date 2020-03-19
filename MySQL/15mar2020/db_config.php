<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "wdpf44";

	$conn = mysqli_connect($host,$user,$pass,$db);

	if(!$conn){
		die("Failed Connection with MYSQL");
	}


	//mysql_connect();

	//mysqli_select_db(database_name);



?>