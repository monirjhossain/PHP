<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	// If the form has been submitted with supplied keywords
	if (isset($_POST['keywords'])) {

		// Connect to server and select database
		$db = new mysqli("localhost", "root", "", "data");
		// Create the query
		//echo "SELECT productCode, productName, MSRP FROM products
		//WHERE MATCH(productDescription) AGAINST('Turnable')";

		$stmt = $db->prepare("SELECT productName, productDescription, MSRP FROM products
		WHERE MATCH(productDescription) AGAINST(?)");

		$stmt->bind_param('s', $_POST['keywords']);
		$stmt->execute();
		$stmt->store_result();
		// Output retrieved rows or display appropriate message
		if ($stmt->num_rows > 0) {
		$stmt->bind_result($prName, $prDesc, $msrp);
		while ($stmt->fetch())
		echo "Product Name: " . $prName . " Product Description: ". $prDesc. " Retail Price: " . $msrp . "<br><br>";

		} else {
			printf("No results found.");
	}
}
?>


	<p>Search the online resources database:<br>
		<form action="" method="post">
			Keywords:<br><input type="text" name="keywords" size="20" maxlength="40" value=""><br>
			<input type="submit" value="Search!">
		</form></p>
	
</body>
</html>