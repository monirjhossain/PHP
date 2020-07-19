<?php
	
	include 'employee.php';

	if (isset($_REQUEST["Submit"])){
		$id = $_REQUEST["ID"];
		$name = $_REQUEST["Name"];
		$designation = $_REQUEST["Designation"];
		$basic = $_REQUEST["Basic"];
		$houserent = $_REQUEST["Houserent"];
		$transport = $_REQUEST["Transport"];
		$totalsalary = $basic + $houserent + $transport;

		$emp = new Employee($id,$name, $designation, $basic, $houserent, $transport,$totalsalary);
		 $emp->display();
	}else{
		echo "Error";
	}


?>