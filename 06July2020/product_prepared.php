<?php 

	include "db_config.php";

	$sql = "SELECT productCode, productName, buyPrice FROM products WHERE buyPrice > 80.00 ORDER BY productName";

	$stmt = $mysqli->stmt_init();
	$stmt->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($code, $pname, $price);

	while ($stmt->fetch()) {
		echo "Product code is: " . $code . " Product Name is " . $pname . " Product Price is " . $price . "<br>" ;
	}



 ?>