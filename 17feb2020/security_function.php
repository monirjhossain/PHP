<?php
	$org = ("<a href ='test'>Test</a>");

	echo $org;

	echo "<br>";

	$new = htmlspecialchars("<a href ='test'>Test</a>", ENT_QUOTES);

	echo $new;

	echo "<br>";

?>

Trim Function

<?php
	echo "Before Something";
	
	$hello = " Hello World ";

	echo $hello;

	echo "After something";

?>