<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<?php 

	$numbers = array(10, 15, 25);
	$fruits = array("Apple", "Orange", "Grape");

	//Associative Array
	$students = array("Amena"=>80, "Rubel"=>82, "Sohrab"=>85); ?>

	<table class="table table-hover">
		<tr>
			<th>Name</th>
			<th>Marks</th>
		</tr>

<?php
	foreach($students as $name=>$score){
		echo "<tr>";
		echo "<td>". $name . "</td><td>" . $score . "</td>";
		echo "</tr>";
	}

	?>
	</table>
	
</body>
</html>