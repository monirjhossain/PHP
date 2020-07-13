
<table border="5px">
	<tr>
	<th>Serial No.</th>
	<th>Product Code</th>
	<th>Product Name</th>
	<th>Product Line</th>
	<th>Quantity In Stock</th>
	<th>Buy Price</th>
	<th>Action</th>
	</tr>

<?php 

	require_once('db_config.php');

	$sql = "SELECT productCode, productName, productLine, quantityInStock, buyPrice FROM products";

	$result = $mysqli->query($sql);

	//print_r($result);
	$i=0;

	while($data = $result->fetch_assoc()){

	$i++;

		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $data['productCode'] ?></td>
			<td><?php echo $data['productName'] ?></td>
			<td><?php echo $data['productLine'] ?></td>
			<td><?php echo $data['quantityInStock'] ?></td>
			<td><?php echo $data['buyPrice'] ?></td>
			<td><a href="delete.php?id=<?php echo $data['productCode']; ?>">Delete</a></td>
		</tr>

	<?php } ?>

	</table>


 