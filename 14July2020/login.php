<?php
/* Because the authentication prompt needs to be invoked twice,embed it within a function.*/
function authenticate_user() {

header('WWW-Authenticate: Basic realm="Secret Stash"');

header("HTTP/1.0 401 Unauthorized");

exit;
}
/* If $_SERVER['PHP_AUTH_USER'] is blank, the user has not yet beenprompted for the authentication information.*/
if (! isset($_SERVER['PHP_AUTH_USER'])) {

	authenticate_user();

	} else {
	$db = new mysqli("localhost", "root", "", "ali_vai");

	$stmt = $db->prepare("SELECT username, pswd FROM logins WHERE username = ? AND pswd = ?");

	$user = $_SERVER['PHP_AUTH_USER'];

	$pass = hash('sha1', $_SERVER['PHP_AUTH_PW']);

	$stmt->bind_param('ss', $user, $pass);

	$stmt->execute();

	$stmt->store_result();

	// Remember to check for erres also!
	if ($stmt->num_rows == 0)authenticate_user();

	else{
		header("Location: success.php");
	}  

}

	?>