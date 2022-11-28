<?php  

	$pdo = new PDO("mysql:host=localhost; dbname=module_4/2","root","");

	$sql = $pdo -> prepare("SELECT * FROM clients GROUP BY `Role` LIMIT 2");

	$sql -> execute();

	$info = $sql -> fetchAll();

	foreach ($info as $key => $person) {
		echo "<hr>ID: ". $person['ID'] .
			 "<br>Name: ". $person['Name'] .
			 "<br>Role: ". $person['Role'];
	}	

	echo "<hr><br><br><br><br>";


	$pdo = new PDO("mysql:host=localhost; dbname=module_4/2","root","");

	$sql = $pdo -> prepare("SELECT * FROM clients ORDER BY `Name` DESC LIMIT 4");

	$sql -> execute();

	$info = $sql -> fetchAll();

	foreach ($info as $key => $person) {
		echo "<hr>ID: ". $person['ID'] .
			 "<br>Name: ". $person['Name'] .
			 "<br>Role: ". $person['Role'];
	}


?>