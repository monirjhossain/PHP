<?php
// Set a constant
define ("FILEREPOSITORY","classnotes");

// Make sure that the file was POSTed.
If ($_FILES['classnotes']['error'] == UPLOAD_ERR_OK) {
	if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

// Was the file a PDF?
	if ($_FILES['classnotes']['type'] != "application/pdf") {echo "<p>Class notes must be uploaded in PDF format.</p>";
} else {

// Move uploaded file to final destination.
	$result = move_uploaded_file($_FILES['classnotes']['tmp_name'],FILEREPOSITORY . $_POST['lastname'] . '_' .  $_FILES['classnotes']['name']);

if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
} 
   }
}else {     echo "<p>There was a problem with the upload. Error code  {$_FILES['classnotes']['error']}</p>";
}
?>