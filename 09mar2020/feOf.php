<?php
 // Open a text file for reading purposes
 $fh = fopen('users.txt', 'r');
 // While the end-of-file hasn't been reached, retrieve the next line
 while (!feof($fh)){
 	echo fgets($fh);
 	echo "<br>";
 }
 // Close the file
 fclose($fh);
?>