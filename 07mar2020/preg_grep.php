<?php

 $foods = array("pasta", "steak", "fish", "potatoes", "sublime");

 $food = preg_grep("/^s/", $foods);

 print_r($food);

?>