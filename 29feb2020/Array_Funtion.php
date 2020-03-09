<?php
//ksort.

// $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

// ksort($age);

// echo "<pre>";

// print_r($age);




	// $price = 10; $tax = 5; $total =50;

	// function calcSalesTax($price, $tax)
	// {

	// $total = $price + ($price * $tax);

	// }
	// calcSalesTax($price, $tax);

	// echo "Total cost: $total";



/*function UserProfile()

{

$user[] = "Sazzad";
$user[] = "sazzad@gmail.com";
$user[] = "0174586596";
return $user;

}

list($name, $email, $phone) = 
UserProfile();
echo "Name: $name, email: $email, phone: $phone <br>";
*/

/*$state[1] = "Pennsylvania";
$state[2] = "New Jersey";

$state[49] = "Hawaii";
print_r($state);*/


//Merge/suffle.
/*
$fruits = array("Apple", "Orange", "Mango");
$fruits1 = array("Grape","Watermelon","Banana");
$allfruits = array_merge($fruits, $fruits1);
echo "<pre>";
print_r($allfruits);


shuffle($allfruits);
echo "<pre>";
print_r($allfruits);
*/

/*	#combine Array
	$students = array("Monir","Minar","Nazmul","Sohrab","Zara","Hasib");

	$score = array("45","60","36","96","75","56");

	$result = array_combine($students, $score);

	echo "<pre>";

	print_r($result);


*/
	#Slice Array
/*
	$ditrict = array("Dhaka","Cumilla","Barishal","Rongpur","Netrokona","Rajshahi");

	$subset = array_slice($ditrict,2,-2);
	echo "<pre>";
	print_r($subset);
*/

	#Splice Array
	/*$ditrict = array("Dhaka","Cumilla","Barishal","Rongpur","Netrokona","Rajshahi");

	$subset = array_splice($ditrict,4,2, array("Pabna","Noakhali"));

	echo "<pre>";

	print_r($ditrict);

	print_r($subset);*/


	/*#Difference jeta hobe setai bad.
	$array1 = array("Dhaka", "Norshingdi", "Manikganj", "Narayanganj", "Munshiganj");

	$array2 = array("Cumilla", "Feni", "Barishal", "Potuakhali", "Noakhali");

	$array3 = array("Nator", "Rajshahi", "Bogra", "Dinajpur", "Laksham");

	$diff = array_diff($array1, $array2, $array3);

	echo "<pre>";

	print_r($diff);*/


	//echo (is_string("123"));



class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
}
$obj1 = new test("Farhaan" , "01700000000");
echo "Result Before Copy \n";
print_r($obj1);
echo "After Copy Both Object will show same result\n";
$obj2 = $obj1; //Copy of the object

echo "<pre>";
$obj2->name = "Habibr";

echo "<pre>";
print_r($obj1);
print_r($obj2);




?>


