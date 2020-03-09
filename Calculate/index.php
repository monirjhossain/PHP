
	
	<form action="" method="post">
	<table>
			<tr>
				<td>Enter the first number:</td>
				<td><input type="number" name="num1"></td>
			</tr>

			<tr>
				<td>Enter the second number:</td>
				<td><input type="number" name="num2"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="calculation1" value="Calculate"></td>
			</tr>
	</table>
	</form>
<h2>Your Result</h2>
<?php
	
	if (isset($_POST['calculation1']) && !empty($_POST['num1']) && !empty($_POST['num2'])) {

		$numOne = $_POST['num1'];
		$numTwo = $_POST['num2'];

		if ($numOne =="" || $numTwo =="") {
			echo "<span style='color:red'>Field must not be empty.</span>";
		}else{
			echo "First Number is: " . $numOne . " and " . "Second Number is: " . $numTwo . "<br>";
		}

		$cal = new calculation;
		$cal-> add($numOne , $numTwo);
		$cal-> sub($numOne , $numTwo);
		$cal-> mul($numOne , $numTwo);
		$cal-> divi($numOne , $numTwo);

	}

?>

<?php


	class calculation{

		public function add($a,$b){

			echo "Summetion is: " . ($a + $b) . "<br>";

		}
		function sub($a,$b){

			echo "Subtraction is: " . ($a - $b) . "<br>";

		}
		function mul($a,$b){

			echo "Multiplication is: " . ($a * $b) . "<br>";

		}
		function divi($a,$b){

			echo "Division is: " . ($a / $b) . "<br>";

		}
	}


?>
