<?php
	
	class Employee 
	{
		public $name; //property
		private $title;
		protected $wage;

		public function setName($uname){
			return
 $this->name= $uname; 
		}
		public function getName(){
			return $this->name; 
		echo "<br>";
	}
		public function sayHello(){
			echo "My name is  {$this->getName()}";
		}

	} //class_emloyee

	class programmer extends Employee
	{	
		public function setWage($amount){
			$this->wage = $amount;
		}
		public function getWage(){
			return "Salary is: " . $this->wage . "<br>";
		}

		public function bonus($percent){
			echo "Bonus is:". $this->wage * $percent / 100;
		}
		
	}

	

	 	/*$emp1 = new Employee;

	 $emp1->setName("Monir");

	 $emp1->getName();


	 	$emp2 = new Employee;

	 $emp2->setName("Hasib");

	 $emp2->getName();

		$emp3 = new Employee;

	$emp3->setName("Habib");

	$emp3->getName();*/
	//$emp3 -> sayHello();

	$prog1 = new Programmer;
	$prog1->setWage(10000);
	echo $prog1->getWage();
	echo $prog1->bonus(15);


	






	 //echo $emp1->name = "Rahim";

	

?>