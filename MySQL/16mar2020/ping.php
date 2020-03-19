<?php
 // Which server to ping?
 $server = "www.example.com";
 // Ping the server how many times?
 $count = 3;
 // Perform the task
 echo "<pre>";
 system("ping -c {$count} {$server}");
 echo "</pre>";
?>