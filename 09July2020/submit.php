<?php
 //define variables and set to empty values
  $name = $email = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nameErr = "";
  if($_POST["name"] == ""){
    $nameErr = "Name is requires";
} else{
  $name = sanitize($_POST["name"]);
}

$emailErr = "";
  if($_POST["email"] == ""){
  $emailErr = "Email is requires";
} else{
  $email = sanitize($_POST["email"]);
}

$addressErr = "";
  if($_POST["address"] == ""){
  $addressErr = "Address is requires";
} else{
  $address = sanitize($_POST["address"]);
} 
}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
    echo "Name: " . $name;
  echo "<br>";
    echo "Email: " . $email;
  echo "<br>";
    echo "Address: " . $address;
?>