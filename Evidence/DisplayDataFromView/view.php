<?php 

	$db = new mysqli("localhost","root","","mycompany");

	$result = $db->query("SELECT * FROM products_view");

	echo "<ul>";

	while ($row = $result->fetch_assoc()) {
		echo "<li> Name: " . $row['name'] ." Price: ". $row['price'] . "</li>";
	}

	echo "</ul>";

 ?>