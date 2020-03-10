<?php
	
	// echo date("D-m-Y: h:i:s");

	// echo "<br>";

	// echo "April 31, 2017: ".(checkdate(4, 31, 2017) ? 'Valid' : 'Invalid');
// Returns false, because April only has 30 days


//echo $weekday = date("l");
// $daynumber = date("jS");
// // $monthyear = date("F Y");
// // echo "The time is ". date(" h:i:s D-m-Y:");

// // echo "<br>";

// 	//echo time();



// $timestamp = time();

// $data = getdate($timestamp);
// echo "<pre>";
// print_r($data);




// $timestamp = mktime(04,14,56,03,05,2018);
// $time = getdate($timestamp);

// echo "<pre>";

// print_r($time);



$now = mktime();
$taxDeadline = mktime(0,0,0,3,11,2020);
// Difference in seconds
$difference = $taxDeadline - $now;
// Calculate total hours
$hours = round($difference / 60 / 60);

echo "Only ".number_format($hours)." hours until the tax deadline!";



?>

