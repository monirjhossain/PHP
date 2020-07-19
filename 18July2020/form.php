<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student information</title>
</head>
<body>
	<fieldset>
		<legend><h3>Student Information</h3></legend>
	<form action="studentInfo.php" method="post">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" placeholder="Input your name"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="address" id="" cols="20" rows="7"></textarea></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>Male<input type="radio" name="gender" value="MALE">
					Female<input type="radio" name="gender" value="FEMALE"></td>
			</tr>
			<tr>
				<td>District</td>
				<td>
					<select name="district">
						<option>Dhaka</option>
						<option>Chittagong</option>
						<option>Barishal</option>
						<option>Dinajpur</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>
	</fieldset>
</body>
</html>