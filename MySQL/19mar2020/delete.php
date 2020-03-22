<?php
	require ("db_config.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM primary_info WHERE st_id = '$id'";

	$row = mysqli_query($con,$sql);

	if($row) {
		header("Location: student_list.php");
	}




?>