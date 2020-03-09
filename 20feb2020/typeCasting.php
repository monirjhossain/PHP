<?php
	$score = (int) 13.05;
	echo $score;
	var_dump($score);

	echo "<br>";

	$sentence = "tihs is sentence 87";
	//echo(int) $sentence;

	$score = 1114;
	$scoreboard = (array) $score;
		$scoreboard[0];
		$scoreboard[1]=300;

		echo "<pre>";

	var_dump($scoreboard);
	print_r($scoreboard);


	$model = "Toyota";
	$obj = (object) $model;

	var_dump($obj);
	echo $obj->scalar;


?>