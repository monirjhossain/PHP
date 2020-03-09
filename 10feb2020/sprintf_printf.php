<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Printf and sprintf</title>
</head>
<body>

<?php
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
?>

<br>

<?php
$str1 = "Nine";
$str2 = "Dhaka";
printf("There are %s million bicycles in %s.",$str1,$str2);
?>

<br>

<?php
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;
?> 

<br>
<br>
<?php
$cost = sprintf("Total cost is tk%.2f", 43.2);

echo $cost;
	?>
</body>
</html>