<?php  

	include("classes.php");

	$Example1 = new Example;

	$Example1->Name = "Pedro";
	// $Example1->Age = 16;

	echo $Example1->Name;
	// echo $Example ->Age;

	echo "<hr>";

	$Example1->SayHello();
	// $Example1->SayBye();

	echo "<hr>";

	// echo $Example1->date_of_creation;
	echo Example::$date_of_creation;

	echo "<hr>";

	// echo $Example1->creator_informations();
	echo Example::creator_informations();

	echo "<hr>";


	echo $Example1->addage(5);
?>