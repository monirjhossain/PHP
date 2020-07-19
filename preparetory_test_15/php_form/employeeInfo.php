<?php
	
	if (isset($_REQUEST["submit"])){
		$id = $_REQUEST["employee_id"];
		$name = $_REQUEST["employee_name"];
		$designation = $_REQUEST["employee_designation"];
		$basic = $_REQUEST["employee_basic"];
		$houserent = $_REQUEST["employee_houserent"];
		$transport = $_REQUEST["employee_transport"];
		$totalsalary = $basic + $houserent + $transport;

		echo "ID: " . $id . "<br>". "Name: " .$name. "<br>". "Designation: ". $designation . "<br>". "Total Salary: " . "Basic ".$basic."+"."House Rent ".$houserent."+"."Transport ".$transport." = ".  $totalsalary . "TK";
	}else{
		echo "Error";
	}


?>