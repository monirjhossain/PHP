<?php
	echo "Welcome to PHP";
	echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php 'Welcome to php'?></title>
</head>

	<?php
	$abc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit debitis possimus molestiae harum velit ex accusamus ipsum pariatur ducimus, beatae, quaerat, rerum earum aut est neque nemo similique a? Nihil."
	?>
<body>
	<?php
			$name = "Monir Hossain";
			$address = "Isdair, Narayanganj";

			echo "Student's name is {$name} and his address is {$address} <br>";


			echo 'Student\'s name is ' . $name .  ' and his address is ' . $address . "<hr>";

	?>

	<?php echo $abc; ?>

</body>
</html>