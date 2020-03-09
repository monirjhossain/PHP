<?php

$fh = fopen("contacts.txt", "a");
try {
 if (! fwrite($fh, "Adding a new contact for Monir \n")) {
 throw new Exception("Could not write!");
 }
} catch (Exception $e) {
 echo "Error (File: ".$e->getFile().", line ".
 $e->getLine()."): ".$e->getMessage();
} finally {
 fclose($fh);
}

?>