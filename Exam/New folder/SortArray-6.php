<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
    
		$student1 = array("Ahmad"=>"Adarsha", "Rakib"=>"Adulapur","Monir"=>"ITE", "Zara"=>"Dilli");
		asort($student1);
		foreach($student1 as $name => $value){
			echo " Name: $name --- School: $value <br>";
			}
		
	
	
	
	
	
	
	?>

</body>
</html>