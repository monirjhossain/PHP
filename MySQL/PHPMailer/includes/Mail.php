
<?php

$to      = 'jontyrose19@gmail.com';
$subject = 'Cafe Nir';
$message = 'hello i am there if you are not there';
$headers = 'From: md.monirjhossain@gmail.com' . "\r\n" .
    'Reply-To: jontyrose19@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>
