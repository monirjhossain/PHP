<?php

	$Val = array("Orange", "Banana", "Mango","Watermelon");

	if(preg_match("/^B/", $Val))
	{
		echo "The string $Val contains the word beautiful";
	}
	else
	{
		echo "The string does not $Val contains the word beautiful";
	}

?>