<?php
if(isset($_POST['submit'])){

$name = $_POST["name"];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 echo $nameErr = "Only letters and white space allowed";
}else{
	echo "Data is validated";
}
}
?>

<form action="" method="post">
		Name:<input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>">
		<input type="submit" name="submit">

</form>



	