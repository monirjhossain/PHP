<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guess</title>
</head>
<body>
	<?php
	if(isset($_POST['sub']) && !empty($_POST['num'])){

	$secretNumber = 453;

	if($_POST['num'] == $secretNumber){
		echo "Congratulation!"; 
	}else if(abs($_POST['num'] - $secretNumber) <10){
		echo "You're getting close!";
	}else{
		echo "Sorry!";
	}

	}

?>

	<form action="" method="post">
		<label for="">Secret Number:</label>

		<input type="number" name="num">

		<input type="submit" name="sub">


	</form>
</body>
</html>