<?php  
	$pdo = new PDO('mysql:host=localhost;dbname=module_4','root', "");

	$id = 47;

	$sql = $pdo -> prepare("DELETE FROM `clients` WHERE ID=?");

	if ($sql->execute([$id])) {
		echo "The client has been deleted successfully!";
	}


?>
