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
        //Name Validation
        if(!preg_match("/^[a-zA-Z]/", $name)){
            echo "<h3>$name is valided</h3>";
        }else{
            echo "<h3>You have put an invalid Name</h3>";
        }
        //Email validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
            echo "<h3>$email valided</h3>";
        } else {
             
            echo "<h3 class='invalid'>You have put an invalid  Email address</h3>";    
        }
        //Age validation
        if($age >= 999){
            echo "<h3>Age validated</h3>";
        } else {
            echo "<h3>write your real age</h3>";
        }
        if(strlen($phone) > 12){
            echo "<h3>Phone Number validated</h3>";
        } else {
            echo "<h3>Write your correct phone number</h3>";
        }

    }
?>   
<form method="post" action="">
<p><input type="text" name="name" placeholder="Put your name"></p>
<p><input type="text" name="email" placeholder="Put email address"></p>
<p><input type="text" name="age" placeholder="Write your age"></p>
<p><input type="text" name="phone" placeholder="Write your phone number"></p>
<input type="submit" name="submit" value="REGISTER">
</form>
</body>
</html>