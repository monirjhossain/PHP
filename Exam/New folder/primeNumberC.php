<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

	<form method="POST">
    <input type="number" name="num">
    <input type="submit" name="submit" value="CheckPrime">
	</form>
    
	<?php
    
	if(isset($_POST['submit'])){
		$n = $_POST['num'];
		
		$prime = 1;
		
		for ($i=2; $i<$n; $i++){
			if($n%$i==0){
				$prime = 0;
				break;
				}
			
			}
			if($prime==1){
				echo "$n prime number";
				}else{
					echo "$n is not prime number";
					}
			
		
		}
	
	
	
	
	
	?>




	
</body>
</html>