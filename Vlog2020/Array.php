<?php include("vlog/header.php")?>
<?php include("vlog/navbar.php")?>
<?php include("vlog/leftsideBar.php")?>
 <div class="col-sm-8 text-left"> 


 	<?php
 	$numbers = array(10, 15, 25 );
 	$fruits = array("Apple", "Orange", "Grape" );

 	//Associative array

 	$students = array("Amena" => 80, "Rubel" => 82, "Shohrab" => 85 );

 	?>
	<table class="table table-hover">
		<tr>
			<th>Name</th>
			<th>Marks</th>
		</tr>

	<?php

 	foreach ($students as $name => $score) {
 		echo "<tr>";
 		echo "<td>" . $name . "</td><td>" . $score . "</td>";
 		echo "</tr>";
 	}
 	?>
 	</table>
      