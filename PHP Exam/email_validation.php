<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Validation with PHP</title>
 
<style>
    .valid {
        background-color:#0B7017;   
    }
     
    .invalid {
        background-color:#F50F13;   
    }
</style>
</head>
 
<body>
<?php
    if(isset($_POST['user_email']) && !empty($_POST['user_email'])){
        
        $email = $_POST['user_email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
            echo "<h3 class='valid'>Your email address $email is a valid address</h3>";
        } else {
             
            echo "<h3 class='invalid'>You have put an invalid address</h3>";    
        }            
    }
?>   
<form method="post" action="">
<p><input type="text" name="user_email" placeholder="Put email address"></p>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>