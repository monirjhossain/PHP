<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form method="post">

	The Number: <input type="number" name="number">
    <input type="submit" name="submit" value="Check">
    
 </form>
 
 
	 <?php
	 
	 
	 if(isset($_POST["submit"])){
		 
		 $n=$_POST["number"];
		 
		 echo prime($n);
		 
		 
		 }
     
     
     function prime($x){
	 
	 if($x==1){
		 
		 echo $x." is not prime number";
		 
		 }elseif($x==2){
			 
			 return $x." is prime number";
			 
			 }else{
				 
				 for($i=2; $i<$x; $i++){
					 
					 if($x%$i==0){
						 
						 return $x." is not prime number";
						 
						 }
					 
					 }
				 
				 
				 }


				 return $x." is a prime number";
	 
	 
	 }
     
     
     
     ?>

</body>
</html>