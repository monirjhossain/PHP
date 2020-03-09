<?php

try {
 $fh = fopen("contacts.txt", "r");
 if (! $fh) {
 throw new Exception("Could not open the file!");
 }
} catch (Exception $e) {
  echo $e->getMessage();
 // echo $e->getPrevious();
 // echo $e->getCode();
 // echo $e->getFile();
 // echo $e->getLine();
 // echo $e->getTrace();
 // echo $e->getMessage();


}

?>