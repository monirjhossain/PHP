<?php

	$a = array("a"=>"red","b"=>"green","c"=>"blue");

	echo "<pre>";
	print_r($a);

	echo "<hr>";

	echo array_shift($a)."<br>";
	print_r($a);

?>