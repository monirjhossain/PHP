<?php

	$result = dns_get_record("prothomalo.com");
	echo "<pre>";
	print_r($result);

?>

<?php

	getmxrr("chaldal.com", $mxhosts);
	print_r($mxhosts);

?>