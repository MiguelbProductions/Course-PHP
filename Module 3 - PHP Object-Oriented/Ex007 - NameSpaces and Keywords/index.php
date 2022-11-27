<?php  
	
	include ("class1.php");
	include ("class2.php");

	$class_test1 = new \Session1\Class1();


	echo "<hr>";

	use \Session2\Class2 as Renamedclass;

	$class_test2 = new Renamedclass();



?>