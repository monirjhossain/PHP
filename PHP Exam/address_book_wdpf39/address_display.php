<?php $db =	new mysqli("localhost", "root", "", "address_book_wdpf39"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display Addresses</title>
</head>
<body>
	<?php
		$sql = "SELECT * FROM student_info";
		$result = $db->query($sql);
	?>	
<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
	</tr>
	<?php  while($row = $result->fetch_assoc()){  ?>
	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['name'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><?php echo $row['mobile'] ?></td>
		<td><?php echo $row['gender'] ?></td>
	</tr>	

<?php	} ?>
</table>
</body>
</html>