<?php

	if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$messege = $_POST['messege'];

	
	$mailTo = "md.monirjhossain@gmail.com";
	$headers = "From: ".$email;
	$txt = "You have recieved an e-mail from" . $name . ".\n\n" .$messege;

	mail('$mailTo','subject','$txt','$headers');

	header("Location: index.php?mailsend");
	

	}
?>