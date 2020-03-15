<?php

	$marks = array(
		array("name"=>"Akash", "MCQ"=>"30","Descriptive"=>"15", "Evidence"=>"40"),
		array("name"=>"Mamun", "MCQ"=>"40","Descriptive"=>"40", "Evidence"=>"45"));

?>
	<table border="1">
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
		if($total>=60 && $students>=30){
			$result = "Passed";
		}
		else
		{
			$result = "Failed";	
		}

		echo "<tr>
		<td>" . $students["name"] . "</td>
		<td>" . $students["MCQ"] . "</td>
		<td>" . $students["Descriptive"] . "</td>
		<td>" . $students["Evidence"] . "</td>
		<td>" . $result . "</td>
		</tr>";
	}

 ?>
 </table>