<?php

	$value1 = "Hello";
	$value2	= & $value1; //$value1 and $value2 both are equal.
	$value2 = "Goodbye";

	echo '$value1: ' . $value1;
	echo "<br>";
	echo '$value2: ' . $value1;




?>