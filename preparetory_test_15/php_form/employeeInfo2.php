<?php
	
	if (isset($_REQUEST["submit"])){
		$id = $_REQUEST["employee_id"];
		$name = $_REQUEST["employee_name"];
		$designation = $_REQUEST["employee_designation"];
		$basic = $_REQUEST["employee_basic"];
		$houserent = $_REQUEST["employee_houserent"];
		$transport = $_REQUEST["employee_transport"];
		$totalsalary = $basic + $houserent + $transport;

	?>
	<h2>Employee Information</h2>
	<table border="5" cellpadding="5px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Total Salary</th>
		</tr>
		<tr>
			<td style="text-align: center;"><?php echo $id; ?> </td>
			<td style="text-align: center;"><?php echo $name; ?> </td>
			<td style="text-align: center;"><?php echo $designation; ?> </td>
			<td style="text-align: center;"><?php echo $totalsalary; ?> </td>
		</tr>
	</table>

<?php

	} else{
		echo "Error";
	}


?>