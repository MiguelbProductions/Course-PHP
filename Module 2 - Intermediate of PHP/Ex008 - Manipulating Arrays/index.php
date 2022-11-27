<?php  

	$brand_of_cars1 = ["BMW", "Lamborguini", "Ferrari"];
	$brand_of_cars2 = ["Alfa Romeo", "Tesla", "Citroen"];

	$brand_of_all_cars = array_merge($brand_of_cars1, $brand_of_cars2);

	print_r($brand_of_all_cars);


	echo "<br><br>";

	$brand_of_cars1 = ["Tesla", "Lamborguini", "Ferrari"];
	$brand_of_cars2 = ["Alfa Romeo", "Tesla", "Lamborguini"];

	$brand_of_all_cars = array_intersect($brand_of_cars1, $brand_of_cars2);

	print_r($brand_of_all_cars);

	echo "<hr>";

	$array_of_random_htmlcodes = ["<h1>The Worst Processors of Intel</h1> <p>Intel I3 5216...</p>", "<div> This a simple block <div> <span> This is a in-line text </span>"];

	$array_of_random_texts = array_map("strip_tags", $array_of_random_htmlcodes);

	echo "<br>";
	print_r($array_of_random_htmlcodes);

	echo "<br><br>";
	print_r($array_of_random_texts);
?>