<?php

	class Employee
	{
		public $name;
		public funtion_set($propName, $propvalue);
		{
			$this->$propName = $propvalue;
		}
	}
	$employee = new Employee;
	$employee->name = "Mario";
	$employee->title = "Exicutive chef";
	$employee->address = "Mirpur";

	echo "Name: {$employee->name} <br/>" ;
	echo "title: {$employee->title} <br/>" ;
	echo "address: {$employee->address} <br/>" ;

?>