<form action="" method="POST">
	<input type="text" name="name" placeholder="write a letter">
	<input type="submit" name="submit">
</form>


<?php

	if(isset($_POST['submit'])){

		$catagory = $_POST['name'];

switch($catagory) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Fair";
        break;
    case "D":
        echo "Poor";
        break;
    case "E":
        echo "Failure";
        break;
    default:
        echo "Enter your correct value";
}
}




?>

