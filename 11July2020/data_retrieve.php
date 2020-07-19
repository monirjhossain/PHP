<?php 

	class Clock{
		public $clock_id;
		public $clock_type;
		public $clock_brand;


		public function displayClock(){
			$product = fopen("product.txt", "r");


			while(!feof($product))
			{
			$product_details = fgets($product);
			echo $product_details ."<br>";
			}
			fclose($product);


		}
	}

	$clock = new Clock();
	echo $clock->displayClock();
	//readtext($product);

 ?>



$file="file.txt" ;
$f=fopen($file,"r");
while($line=fgets($f))
{
echo "";
}
?>
$line
