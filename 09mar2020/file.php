<?php
 // Read the file into an array
 $users = file('users1.txt');
 // Cycle through the array
 foreach ($users as $user) {
 // Parse the line, retrieving the name and e-mail address
 list($name, $email) = explode(',', $user); ?>


<a href="mailto:<?php echo $email ?>"><?php echo $name ?></a><br>

<?php
 
 
}


?>