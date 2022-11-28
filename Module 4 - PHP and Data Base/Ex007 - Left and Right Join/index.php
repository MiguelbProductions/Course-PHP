<?php  

	$pdo = new PDO("mysql:host=localhost; dbname=module_4/2","root","");

	$sql = $pdo -> prepare("SELECT * FROM clients LEFT JOIN roles ON `clients`.`Role` = `roles`.`ID`");

	$sql -> execute();

	$info = $sql -> fetchAll();

	echo "<pre>";
	print_r($info);
	echo "</pre>";

	foreach ($info as $key => $person) {
		echo "<hr>ID: ". $person['ID'] .
			 "<br>Name: ". $person['Name'] .
			 "<br>Role_ID: ". $person['Role'] . 
			 "<br>Role_Name: ". $person['Name_of_Role'];

	}

?>