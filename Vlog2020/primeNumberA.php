<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prime</title>
</head>

<body>

	<?php
		if(isset($_POST['submit'])){
			
		$n = $_POST['num'];
		$prime = 1;
		for($i=2; $i<$n; $i++){
			if($n%$i==0){
				$prime=0;
				break;
				}//if close
			
			}//for loop close//
			
		if($prime==1){
			echo "The number $n is prime";
			}else{
				echo "The number $n is not prime";
				
				}
    	
	
	}
	
	
	?>
    
    <form method="POST">
    <input type="number" name="num">
    <input type="submit" name="submit" value="CheckPrime">
    
    
    </form>
	
</body>
</html>