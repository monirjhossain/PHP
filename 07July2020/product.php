
	<table border="5px">
		<th>Employee Number</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>City</th>
		<th>Country</th>
		<th>Action</th>
	

<?php 

	include('db_config.php');

	$sql = "SELECT * FROM emp_contact_info_view";
        //print_r($sql);

	$result = $mysqli->query($sql);

	while($data = $result->fetch_assoc()){

	?>
	
		<tr>
			<td><?php echo $data['employeeNumber'] ?></td>
			<td><?php echo $data['lastName'] ?></td>
			<td><?php echo $data['firstName'] ?></td>
			<td><?php echo $data['city'] ?></td>
			<td><?php echo $data['country'] ?></td>
			<td><a href=""></a></td>
		</tr>

	<?php } ?>

</table>

