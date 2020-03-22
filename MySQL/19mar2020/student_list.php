<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!--jquery-->
	<script src="js/jquery.min.js"></script>
	<!--bootstrap.min.js-->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php

		include("db_config.php");

		$sql = "SELECT * FROM primary_info";

		$result = mysqli_query($con, $sql);

		?>

		<div class="container">

		<table class="table table-hover">
			<thead>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th colspan="2">Action</th>
			</tr>
			</thead>
		</div>

		<?php while($row = mysqli_fetch_array($result)){ ?>

			<tr>
				<td><?php echo $row['st_id'];?></td>
				<td><?php echo $row['st_name']?></td>
				<td><?php echo $row['st_email'];?></td>
				<td><?php echo $row['st_phone'];?></td>
				<td><a href="delete.php?id=<?php echo $row['st_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
			</tr>

		<?php } ?>

	</table>
</body>
</html>