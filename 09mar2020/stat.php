<?php
 $file = 'stat.php';
 printf("File last accessed: %s", date("m-d-y g:i:sa",
fileatime($file)));

 echo "<br>";


 printf("File last changed: %s", date("m-d-y g:i:sa",
fileatime($file)));
?>