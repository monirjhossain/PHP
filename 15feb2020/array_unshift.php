<?php

	$a = array("a"=>"red","b"=>"green","c"=>"blue");

	echo "<pre>";
	print_r($a);

	echo "<hr>";

	array_unshift($a,"yellow")."<br>";
	print_r($a);

?>