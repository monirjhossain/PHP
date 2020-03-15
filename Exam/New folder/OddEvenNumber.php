
	<form action="" method="POST">
		<input type="number" name="num">
		<input type="submit" name="submit" value="Check Numbr">
	</form>




<?php
	if(isset($_POST['submit'])){
		$num = $_POST['num'];
	
	
	if($num % 2 == 0){
		echo "$num Its a Even number";
	}else{
		echo "$num Its a Odd number";
	}

	/*for ($i=0; $i < $num; $i++) { 
		if($i %2 == 0){
			$even .= $i . ",";
		}else{
			$odd .= $i . ",";
		}
	}

	echo "The even number is $even <br>";
	echo "The even number is $odd";*/	

	}

?>