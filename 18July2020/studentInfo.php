<?php 

include 'form.php';

?>

	<table border="2px">
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Gender</th>
		<th>District</th>
	</tr>


<?php 

	if (isset($_POST['submit'])) {
		
	$name = $_POST['name'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$district = $_POST['district'];

?>
<tr>
	<td><?php echo $name ?></td>
	<td><?php echo $address ?></td>
	<td><?php echo $gender ?></td>
	<td><?php echo $district ?></td>
</tr>

	<?php } ?>

</table>
