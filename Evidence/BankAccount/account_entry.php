<?php 

	$mysqli = new mysqli("localhost","root","","bank");

	if($_SERVER['REQUEST_METHOD']=='POST'){

		extract('$_POST');

	$result = mysqli_query("INSERT INTO account  VALUES('','$name','$accout_type','$opening_balance')");

	if($mysqli->affected_rows>0){
		echo "Inserted Successfully";
	}

	}

 ?>