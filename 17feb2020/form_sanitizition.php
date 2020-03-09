<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
 //define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = sanitize($_POST["name"]);
  $email = sanitize($_POST["email"]);
  $website = sanitize($_POST["website"]);
  $comment = sanitize($_POST["comment"]);
  $gender = sanitize($_POST["gender"]);
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

  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
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