<?php 

	$db = new mysqli("localhost","root","","bank");

	if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$acctype = $_POST['acctype'];
	$balance = $_POST['balance'];

	$result = $db->query("INSERT INTO account(name, account_type, opening_balance) VALUES ('$name','$acctype', '$balance')");

	if($result){
		echo "Data inserted Successfully";
	}else{
		echo "Data not inserted";
	}
}


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Insert</title>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend>Account Information</legend>
		<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Account Type:</td>
			<td><select name="acctype" id="">
			<option>Select One</option>
			<option value="saving">Saving Account</option>
			<option value="current">Current Account</option>
		</select></td>
		</tr>
		<tr>
			<td>Balance:</td>
			<td><input type="number" name="balance"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>