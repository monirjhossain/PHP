<?php

class Clock{

	public $Clock_id;
	public $Clock_type;
	public $Clock_brand;


public function display(){
	$myfile = fopen("product.txt" , "r") or die("Unable to open");

	while(!feof($myfile)){
		echo fgets($myfile) . "<br>";
	}

	fclose($myfile);

	}

}

$Clock = new Clock;
$Clock ->display();




?>