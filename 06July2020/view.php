<?php 

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "views";

	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	if(!$conn){
		die("Connection Failed")
	}else{
		echo "Connection Successfully";
	}



 ?>

 <?php echo "Today is ".date("F d, Y") ?>