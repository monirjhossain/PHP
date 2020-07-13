<?php  

session_start();  
// Has a session been initiated previously?  
if (! isset($_SESSION['username'])) {
// If no previous session, has the user submitted the form?
	if (isset($_POST['username'])){$db = new mysqli("localhost", "webuser", "secret", "corporate");
	$stmt = $db->prepare("SELECT first_name FROM users WHERE username = ? and password = ?");
	$stmt->bind_param('ss', $_POST['username'], $_POST['password]);
	$stmt->execute();
	$stmt->store_result();
		if ($stmt->num_rows == 1){$stmt->bind_result($firstName);
			$stmt->fetch();
			$_SESSION['first_name'] = $firstName;
			header("Location: http://www.example.com/");
			}
			} 
			else {require_once('login.html');
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">Username:<br>
		<input type="text" name="username" size="10"><br>Password:<br>
		<input type="password" name="pswd" SIZE="10"><br><input type="submit" value="Login"></form>
</body>
</html>