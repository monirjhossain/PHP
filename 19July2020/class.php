<?php 

	
	$file = fopen('address.txt', 'w');

	$data = ['Monir'=>'monir@gmail.com','Akash'=>'akash@gmail.com','Jamal'=>'jamal@gmail.com','Kamal'=>'kamal@gmail.com','Zahid'=>'zahid@gmail.com'];


	foreach ($data as $name => $email) {
		fwrite($file, "$name $email \n");
	}
	fclose($file);

	echo "File size: " . filesize('address.txt') . ' Bytes';




 ?>