<?php 

	class Country{
		public $id;
		public $city;
		public $country1;


		public function CountryName(){
			$country = fopen('countryList.txt', 'r');

			While(!feof($country)){
				$country_details = fgets($country);
				echo $country_details . "<br>";
			}

			fclose($country);
		}
	}

	$countryInfo = new Country();
	$countryInfo->CountryName();

 ?>