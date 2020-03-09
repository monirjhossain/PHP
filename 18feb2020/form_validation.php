<!DOCTYPE HTML>  
<html>
<head>
  <style>
    .error{
      background-color: red;
      color: white;
      font-weight: bold;
    }
  </style>
</head>
<body>  

<?php
 //define variables and set to empty values
  $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nameErr = "";
  if($_POST["name"]==""){
    $nameErr = "Name is requires";
} else{
  $name = sanitize($_POST["name"]);
}

$emailErr = "";
  if($_POST["email"]==""){
  $emailErr = "Email is requires";
} else{
  $email = sanitize($_POST["email"]);
}

$websiteErr = "";
  if($_POST["website"]==""){
  $websiteErr = "Website is requires";
} else{
  $website = sanitize($_POST["website"]);
}
$commentErr = "";
  if($_POST["comment"]==""){
  $commentErr = "Comment is requires";
} else{
  $comment = sanitize($_POST["comment"]);
}
$genderErr = "";
  if($_POST["comment"]==""){
  $genderErr = "Gender is requires";
} else{
  $gender = sanitize($_POST["gender"]);
}
  
}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

  Name: <input type="text" name="name"><span class="error"><?php if(isset($nameErr)) echo $nameErr; ?></span>
  <br><br>
  E-mail: <input type="text" name="email"><span class="error"><?php if(isset($emailErr)) echo $emailErr; ?></span>
  <br><br>
  Website: <input type="text" name="website"><span class="error"><?php if(isset($websiteErr)) echo $websiteErr; ?></span>
  <br><br>

  Comment: <textarea name="comment" rows="7" cols="21"></textarea><span class="error"><?php if(isset($commentErr)) echo $commentErr; ?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other<span class="error"><?php if(isset($genderErr)) echo $genderErr; ?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
    echo "Name: " . $name;
  echo "<br>";
    echo "Email: " . $email;
  echo "<br>";
    echo "Website: " . $website;
  echo "<br>";
    echo "Comment: " . $comment;
  echo "<br>";
    echo "Gender: " . $gender;
?>

</body>
</html>