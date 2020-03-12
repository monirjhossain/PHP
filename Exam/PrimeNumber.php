<form method="post" action="">
    <p><input type="text" name="mynum" placeholder="Enter a number"></p>
    <input type="submit" name="submit" value="Prime Number Check">
     
</form>


<?php
    if(isset($_POST['submit'])) {
     
    $mn = $_POST['mynum'];
     
 
        if($mn==0 || $mn==1){
        	echo "0 and 1 will not accept";
        }
        else{
        if ($mn==2 || $mn==3 || $mn==5 || $mn==7) {
            echo "<h2> $mn is a Prime number </h2>"; 
        }
        else if (($mn%2)!=0 && ($mn%3)!=0 &&($mn%5)!=0 && ($mn%7)!=0) {
            echo "<h2> $mn is a Prime number </h2>";
        } 
                     
        else {
            echo "<h3> $mn is not a Prime number </h3>";
        }
        }    
}   
?>
 
