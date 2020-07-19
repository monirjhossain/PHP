<?php

	class Employee
	{
		public $id;
		public $name;
		public $designation;
		public $basic;
		public $houserent;
		public $transport;
		public $totalsalary;
		
		

		public function __construct($id,$name, $designation, $basic, $houserent, $transport,$totalsalary){

			$this->id = $id;
			$this->name = $name;
			$this->designation = $designation;
			$this->basic= $basic;
			$this->houserent = $houserent;
			$this->transport = $transport;
			$this->totalsalary = $totalsalary;
			
			

		}

		public function display(){

			echo "ID:" . $this->id . "<br>";
			echo "Name:" . $this->name . "<br>";
			echo "Designation:" . $this->designation . "<br>";
			echo "Total Salary: " . $this->totalsalary;
			
		}
	}

?>