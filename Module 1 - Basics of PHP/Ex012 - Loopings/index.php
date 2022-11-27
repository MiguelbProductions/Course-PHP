<?php  

	$number = 5;
	$max_number = 51;
	$min_number = -5;

	for($number; $number < $max_number; $number++) {
		echo $number, "<hr>";
	}

	echo "<br>"; 

	do {
		$number--;

		echo $number, "<hr>";

		
	} while ($number > $min_number)
?>