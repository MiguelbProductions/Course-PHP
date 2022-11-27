<?php  

	$brand_of_cars = ["BMW", "Lamborguini", "Ferrari", "Alfa Romeo", "Citroen"];

	foreach ($brand_of_cars as $index => $car) {
		echo $car, "<br>";
	}


	echo "<br><br>";

	for($car = 0; $car < count($brand_of_cars); $car++) {
		echo $brand_of_cars[$car], "<br>";
	}


?>