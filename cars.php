<?php
	$search_price = $_GET["search_price"];
	$search_miles = $_GET["search_miles"];
	class Car {
		public $make_model;
		public $price;
		public $miles;

		public function __construct($car_make, $car_price, $car_miles){
			$this->make_model = $car_make;
			$this->price = $car_price;
			$this->miles = $car_miles;
		}
	}
	$porsche = new Car("2014 Porsche",114991,7864);
	$ford = new Car("2011 Ford", 55955, 14241);
	$lexus = new Car("2013 Lexus", 44700, 20000);
	$mercedes = new Car("Something Mercedes", 39900, 37979);

	$cars = array($porsche, $ford, $lexus, $mercedes);

	function search_cars($cars){
		$cars_matching_input = [];
		foreach ($cars as $car) {
			if(($car->price < $_GET["search_price"])&&($car->miles < $_GET["search_miles"])){
				array_push($cars_matching_input, $car);
			}
		}
		if (empty($cars_matching_input)){
			return "No cars matching search.";
		} else {
			return $cars_matching_input;
		}
	}
	var_dump(search_cars($cars));
	// echo $result->search_cars($cars);
?>