<?php

 $domain = "example.com";
 $recordexists = checkdnsrr($domain, "CNAME");
 if ($recordexists)
 echo "The domain '$domain' has a CNAME record!";
 else
 echo "The domain '$domain' does not appear to have a DNS record!";

?>