<?php
// Set a constant
$path = "classnotes";

// Make sure that the file was POSTed.
If ($_SERVER['REQUEST_METHOD'] == "POST") {

// Move uploaded file to final destination.
	$result = move_uploaded_file($_FILES['classnotes']['tmp_name'],
	$path . $_POST['lastname'] . '_' .  $_FILES['classnotes']['name']);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";


}else {     echo "<p>There was a problem with the upload. Error code  {$_FILES['classnotes']['error']}</p>";
}
?>