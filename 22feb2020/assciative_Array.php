<?php

	$links = array("The Apache Web Server"=>"www.aache.org", "Appress"=>"www.apress.org","The PHP Sripting Language"=>"www.php.org");

	foreach ($links as $key => $value) {
		?>
		<a href="http://<?php echo $value; ?>"><?php echo $key; ?></a><br>
	<?php } ?>



