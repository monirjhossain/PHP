<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Search the employee database:<br>
		<form action="" method="post">
			Keyword:<br>
			<input type="text" name="keyword" size="20" maxlength="40" value=""><br>
			Field:<br>
			<select name="field">
				<option value="">Choose field:</option>
				<option value="lastname">Last Name</option>
				<option value="email">E-mail Address</option>
			</select><input type="submit" value="Search!" />
		</form></p>

	<?php
	// If the form has been submitted with a supplied keyword
	if (isset($_POST['field'])) 
	{// Connect to server and select database
		$db = new mysqli("localhost", "root", "", "data");
	// Create the query
	if ($_POST['field'] == "lastname") 
	{$stmt = $db->prepare("SELECT firstName, lastName, email FROM employees WHERE lastName like ?");
	}elseif ($_POST['field'] == "email") 
	{$stmt = $db->prepare("SELECT firstName, lastName, email FROM employees WHERE email like ?");}
	$stmt->bind_param('s', $_POST['keyword']);
	$stmt->execute();
	$stmt->store_result();// If records found, output them
	if ($stmt->num_rows > 0) 
		{$stmt->bind_result($firstName, $lastName, $email);

	while ($stmt->fetch())printf("%s, %s (%s)<br>", $lastName, $firstName, $email);} else {echo "No results found.";
	}   
  }
?>
	
</body>
</html>