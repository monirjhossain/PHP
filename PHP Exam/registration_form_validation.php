<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form with PHP</title>
</head>
 
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        extract($_POST);
        if(preg_match(pattern, subject)){}
        //Email validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
            echo "<h3 class='valid'>$email valided</h3>";
        } else {
             
            echo "<h3 class='invalid'>You have put an invalid  Email address</h3>";    
        }
        //Password validation
        if((strlen($pass)>=4 && strlen($pass)<=8)) {
            echo "<h3>Password validated</h3>";
        } else {
            echo "<h3>You have to put minimun 4 and maximu 8 character long password</h3>";
        }

    }
?>   
<form method="post" action="">
<p><input type="text" name="name" placeholder="Put your name"></p>
<p><input type="text" name="email" placeholder="Put email address"></p>
<p><input type="password" name="pass" placeholder="type New password"></p>
<input type="submit" name="submit" value="REGISTER">
</form>
</body>
</html>