


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Validation with PHP</title>
 </head>

<body>

   
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){

    extract($_POST);

    if(preg_match("/[a-zA-Z]/", $name)){
       echo "<h3 class='valid'>Name is: $name valid</h3>";
     }else{
         echo "<h3 class='invalid'>Name is: $name is invalid</h3>";
     }

 if(filter_var($email, FILTER_VALIDATE_EMAIL)==TRUE){
    echo"<h3 class='valid'>$email valided </h3>";
}else{
    echo "<h3>Put valid email</h3>";

 }if(preg_match("/[0-9]{1,2}/", $age)){
    echo "<h3 class='valid'> $age is valid </h3>";
 }
 else{
    echo "<h3 class='invalid'> age wrong</h3>";

 }
 if((strlen($phone)>=4 && strlen($phone)<=11)){
    echo "<h3> phone is vlid</h3>";
 }else{
    echo "<h3>phone invalid</h3>";
 }

 }
 ?>  

<fieldset>
<h2>PHP validation</h2>
<form method="post" action="">
 <label>Name</label><br>
<p><input type="text" name="name" placeholder="Put name"></p>
 <label>email</label><br>
<p><input type="text" name="email" placeholder="Put email address"></p>
 <label>phone</label><br>
<p><input type="number" name="phone" placeholder="Put number"></p>
 <label>age</label><br>
<p><input type="age" name="age" placeholder="Put age"></p><br>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>
</body>
</html>