<?php

	if(isset($_POST['user_email']) == true && empty($_POST['user_email'])== false){

		$email = $_POST['user_email'];

		if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){

			echo "  This is a valid email address";
			
		}else{

			echo "  Sorry,This is an invalid email address";
		}
	}

?>

<form action="" method="post">
	<input type="text" name="user_email">
	<input type="submit" value="VALIDATE" name="submit">
</form>