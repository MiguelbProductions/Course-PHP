<?php  

	$Boys_of_Class = array("Miguel", "Simão", "João", "Fabio", "Cunha", "Camilo", "Guilherme", "Cabrita","Ricardo","Gonçalo","Cris", "Alan");

	echo "<h3>Some boys of Class:</h3> <br>";

	print_r($Boys_of_Class);

	echo "<br><br>";

	for($name = 0; $name < count($Boys_of_Class); $name++) {
		echo $Boys_of_Class[$name], "<br>";
	}

	$Girsl_of_Class = ["Rebeca", "Carolina", "Ana Carolina"];

	echo "<br><h3>All Girls of Class:</h3> <br>";

	print_r($Girsl_of_Class);

	echo "<br><br>";

	for($name = 0; $name < count($Girsl_of_Class); $name++) {
		echo $Girsl_of_Class[$name], "<br>";
	}

?>