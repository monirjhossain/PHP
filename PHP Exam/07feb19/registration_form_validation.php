<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form with PHP</title>
</head>
  
<body>
<?php

echo md5("idb");

    if($_SERVER['REQUEST_METHOD']=='POST'){
         
         extract($_POST);
        if($name == '' || $email == '' || $pass == '' || $repass == ''){
            echo "Please fill up the form";
            
        } else {
            extract($_POST);
            //Email validation
            if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
                echo "<h3>$email valided</h3>";
            } else {
                  
                echo "<h3>You have put an invalid  Email address</h3>";    
            }
            //Password validation
            //$pattern = /[A-z0-9._%+-]{4,8}/;

            if((strlen($pass)>=4 && strlen($pass)<=8)) {
                echo "<h3>Password validated</h3>";
            } else {
                echo "<h3>You have to put minimun 4 and maximu 8 character long password</h3>";
            }
            //Password retype matching
            if($pass != $repass){
                echo "Passwords are not same";
            }
        }
    }
?>   
<form method="post" action="">
<p><input type="text" name="name" placeholder="Put your name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></p>
<p><input type="text" name="email" placeholder="Put email address" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></p>
<p><input type="password" name="pass" placeholder="type New password"></p>
<p><input type="password" name="repass" placeholder="retype password"></p>
<input type="submit" name="submit" value="REGISTER">
</form>
</body>
</html>