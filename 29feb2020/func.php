<?php
/*

$str= "good";
$$str= "bye";
echo ${$str };

*/

/*
$a="1";
If($a==1) {
Print "sonna is funny";
}
elseif($a=="1") {
Print "sonna is jolly ";
} else {
Print "sonna is gomvir";
}
*/

/*
$i=0;
While ($i<=10) {
	If ($i<=5) {
	break;
	}
Print $i;
$i=$i+2;
}
*/

$price = 10; $tax = 5; 
	function calcSalesTax($price, $tax)
	{
	$total = $price + ($price * $tax); 
	echo "Total cost: $total";
	}
	calcSalesTax($price, $tax);



?>
