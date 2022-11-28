<?php  
	$pdo = new PDO('mysql:host=localhost;dbname=module_4','root', "");

	$id = 44;

	$sql = $pdo -> prepare("UPDATE `clients` SET name=?, age=? WHERE ID=? ");

	if ($sql->execute(["Jorge", 36, $id])) {
		echo "The client has been updated successfully!";
	}


?>
