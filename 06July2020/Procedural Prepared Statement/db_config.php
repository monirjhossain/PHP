<?php 

	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'classicmodels';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(!$conn){
		die ("Connection Failed :" . mysqli_connect_error());
	}else{
		echo "Connection Successfully <hr><br>";
	}


	$sql = "SELECT productCode, productName, quantityInStock, buyPrice FROM products WHERE buyPrice>=80.00";

	//Creat prepared statement
	$result = mysqli_prepare($conn,$sql);

	//Bind result Set in variable
	mysqli_stmt_bind_result($result, $code, $name, $quantity, $price);

	//Execute prepared statement
	mysqli_stmt_execute($result);

	//Fetch all data
	while(mysqli_stmt_fetch($result)){
		echo "Product Code " . $code . " Product Name " . $name . " Product quantity " . $quantity ." Product Price " . $price . "<br>";
	}

	//prepare statement close
	mysqli_stmt_close($result);

	//Close connection

	mysqli_close($conn);

 ?>