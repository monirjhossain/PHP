<?php

	$carBrands = ["Cheverolet","Cherysel","Ford","Hoda","Toyota", 2=>"Brands"];

	echo "<pre>";

	var_dump($carBrands);

	print_r($carBrands);

	echo "<br>";

	$germanCars = [20=>"Audi",22=>"Corolla",36=>"Porche",25=>"BMW"];



	
	//Multidimention Array//
	$Country = ["Bangladesh" => array("Magura"=>"Shakib Al Hasan", "Mushfik" => "Dhaka", 								"Rajshahi" => "Rajin Saleh"),

				"India" => array("Mumbai"=>"Kohli", "Dilhi" => "Ganguli", "Kolkata" => 						"Pandey"),

				"Australia" => array("Melborn"=>"Phillip", "CBU" => "Ponting", "Tenbridge" 			=> "Breat lee")
			   ];

				echo $Country["Bangladesh"]["Magura"];

				echo "<pre>";

				echo $Country["India"]["Kolkata"];

				echo "<pre>";

				echo $Country["Australia"]["Melborn"];

	echo "<pre>";


//Numeric Index Array
$flowers = array();

$flowers[0] = "Rose";
$flowers[1] = "Merigold";
$flowers[2] = "Sunflower";
$flowers[] = "BloodRose";
$flowers[] = "Tulip";
$flowers[] = "Jesmin";

var_dump($flowers);

echo count($flowers);





?>