

<?php 
	include "db_config.php";
/*
	//Select Number of rows

	require_once('db_config.php');

	$sql = "SELECT productCode, productName, buyPrice FROM products WHERE buyPrice > 50.00";

	$result = $mysqli->query($sql);

	echo $result->num_rows;
*/
	//Update Number of rows
/*
	$sql = "UPDATE products SET MSRP = 170.00 WHERE MSRP > 150.00";

	$result = $mysqli->query($sql);

	echo $mysqli->affected_rows;
*/


	$sql = "DELETE FROM products WHERE buyPrice BETWEEN 24.00 AND 50.00";

	$result = $mysqli->query($sql);

	echo $mysqli->affected_rows;

?>	
	


 