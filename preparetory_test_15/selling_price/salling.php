<?php

class book{

	public $isbn;
	public $bookname;
	public $authorname;
	public $price;

	public function __construct ($bookisbn, $book_name, $book_authorname, $book_price){

		$this->isbn = $bookisbn;
		$this->bookname = $book_name;
		$this->authorname = $book_authorname;
		$this->price = $book_price;

		echo "ISBN : " .$this->isbn  . "<br>";
		echo "Book Name : " .$this->bookname . "<br>";
		echo "Author Name : " .$this->authorname . "<br>";
		echo "Actual Price : " .$this->price . "<br>";


	}


	public function Selling_price($discount){

		 $result = $this->price - $this->price * ($discount/100);
		 echo "selling Price : <b>" . $result . " (After " . $discount . "% Discount) <b>";
		
	}

}

$book1 = new book("1234", "PHP", "A", "1000");
$book1 -> Selling_price(40);
?>