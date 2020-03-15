<?php

	$marks = array(
	array("Name"=>"Student 1","MCQ"=>40,"Descriptive"=>17,"Evidence"=>30),
	array("Name"=>"Student 2","MCQ"=>28,"Descriptive"=>40,"Evidence"=>40));
	

?>

<table border = "3">
	<tr>
		<th>Name</th>
		<th>MCQ</th>
		<th>Descriptive</th>
		<th>Evidence</th>
		<th>Result</th>
	</tr>
<?php
	
	
	foreach ($marks as $students) {

	$total = $students["MCQ"] + $students["Descriptive"];

	if($total>=60 && $students["Evidence"]>=30){

		$n="passed";
	}
	else{
		$n="failed";
	}
	echo "<tr>
	<td>".$students["Name"]."</td>
	<td>".$students["MCQ"]."</td>
	<td>".$students["Descriptive"]."</td>
	<td>".$students["Evidence"]."</td>	
	<td>".$n."</td>
	</tr>";

	}


?>	
</table>