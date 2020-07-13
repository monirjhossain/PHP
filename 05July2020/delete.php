<?php 

	require_once('db_config.php');

	$id = $_GET['id'];

	$sql = "DELETE FROM products WHERE productCode = '$id'";

	$mysqli->query($sql);

	header("Location:products.php");


 ?>