
<form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">    
</form>

<?php
	if(isset($_POST['submit'])){
	$x = $_POST['name'];

	function factorial($n) { 

	  if ($n === 0)
	 {
	    return 1;
	 }
	  return $n * factorial($n-1);
         
	}
	echo factorial($name);
}

?>

<?php

	function factorial($number){
		if($number==0)
		{
			return 1;
		}
		return $number * factorial($number-1);
	}
		echo factorial()


?>
