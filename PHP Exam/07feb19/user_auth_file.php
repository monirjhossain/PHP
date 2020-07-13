<?php
	if (($_SERVER['PHP_AUTH_USER'] != 'user1') ||
 ($_SERVER['PHP_AUTH_PW'] != 'pass1')) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
} 


?>

<h1>Welcome to Home page</h1>