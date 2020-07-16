<?php 

class Book {
	public $isbn;
	public $bname;
	public $aname;
	public $price;
	
	function __construct($isbn,$bname,$aname,$price){
		$this-> isbn = $isbn;
		$this-> bname = $bname;
		$this-> aname = $aname;
		$this-> price = $price;

		echo "ISBN :" .$this-> isbn . "<br>";
		echo "Book Name :" .$this-> bname . "<br>";
		echo "Author Name :" .$this-> aname . "<br>";
		echo "Accutal Price :" .$this-> price . "<br>";
	}
	public function Selling_price($discount){
		$res = $this -> price - $this -> price * ($discount / 100);
		echo "Selling Price : <b>" .$res . " (After ". $discount."% Discount) </b>";
	}
}

$b1 = new Book(125, "Bangla", "Kazi Nazrul", 200);
$b1 -> Selling_price(30);
echo "<br> <br>";

$b2 = new Book(125, "Bangla", "Kazi Nazrul", 1000);
$b2 -> Selling_price(60);

 ?>