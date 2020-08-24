<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php   // If the form has been submitted with a supplied last name   
	if (isset($_POST['lastname'])) 
		{// Connect to server and select database
			$db = new mysqli("localhost", "root", "", "classicmodels");
			// Query the employees table
			$stmt = $db->prepare("SELECT firstName, lastName, email FROM employees WHERE lastName like ?");
			$ln = $_POST['lastname'];

			$ln =  "%$ln%";
			
			$stmt->bind_param('s', $ln);
			$stmt->execute();
			$stmt->store_result();
			// If records found, output them
			if ($stmt->num_rows > 0) 
				{$stmt->bind_result($first, $last, $em);
					
					echo "<h2>Found $stmt->num_rows record(s)</h2>";
					echo "<ul>";
					while ($stmt->fetch()) 
						{ 
							echo "<li>First Name: $first,  Last Name: $last, Email: $em </li>";	
						}
					echo "</ul>";	
				} 
					else 
				{echo "No results found.";}   
		}

	?>


<p>
	Search the employee database:<br />
	<form action="search.php" method="post">
		Last name:<br>
		<input type="text" name="lastname" size="20" maxlength="40" value=""><br>
		<input type="submit" value="Search!">
	</form>
</p>