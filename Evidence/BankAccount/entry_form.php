<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Entry form</title>
</head>
<body>
	<form action="account_entry.php" method="post">
		<h2>Bank user form</h2><hr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="Your name"></td>
		</tr>
		<tr>
			<td>Account Type</td>
			<td>
				<select name="account_type" id="">
					<option value="">Savings</option>
					<option value="">Current</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Openning Balance</td>
			<td><input type="num" name="opening_balance" placeholder="Openning Balance"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</form>
</body>
</html>