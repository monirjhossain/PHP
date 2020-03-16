<?php
 echo "HTTP's default port number is: ".getservbyname("https", "tcp");

 echo "<br>";
?>

<?php
 echo "Port 80's default service is: ".getservbyport(80, "tcp");
?>