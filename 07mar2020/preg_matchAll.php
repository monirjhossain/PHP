<?php

 $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";

 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $output_array);

 foreach ($output_array as $name) {
 	echo $name[1]. "<br>";
 }

?>
