<?php 

	class Book{
		public $isbn;
		public $book_name;
		public $uthor_name;
		public $price;

		public function __construct($isbn,$book_name,$uthor_name,$price){
			$this->isbn = $isbn;
			$this->book_name = $book_name;
			$this->uthor_name = $uthor_name;
			$this->price = $price;


			echo "ISBN: " . $this->isbn . "<br>";
			echo "Book Name: " . $this->book_name . "<br>";
			echo "Author Name: " . $this->uthor_name . "<br>";
			echo "Actual Price: " . $this->price . "<br>";
		}

		public function Selling_price($discount){
			$result = $this->price - $this->price * ($discount/100);
			echo "<b>Selling price: " . $result . "(After " . $discount . "%Discount");
		
		}
	}

	$obj = new Book(1023,"Geetanjolee","Habibur Rahman",300);
	$obj->Selling_price(30);





 ?>