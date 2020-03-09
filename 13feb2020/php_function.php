<?php

	/*function footer_func(){
		//echo "Copyright All rights reserved 2020</p>";
     } 	

	//footer_func();
	//footer_func();
	//footer_func();

	//function_with_Arguments

	function full_Name($fast,$last){
		//echo "$fast $last";
		//echo $fast . " " . $last;
		//echo '$fast,$last'; //emon kore hobe na.
	}

	//full_Name("Rahim","Uddin");

	//function_with_Arguments_default_value.

		function welcome($name, $greetings="Good Morning"){
			echo "$greetings! $name</br>";
		}

		welcome("Rahim");
		welcome("Karim","Good afternoon Rahim");
		welcome("Monir","Good Night Rahim");*/


		function fun_sum($num1=50,$num2=50){
			$total = $num1 + $num2;
			return $total;
		}
		$output = fun_sum(50);
		echo "The number is: $output ";


?>