<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>

		<h2>Creation of Bank account</h2>

		<form method="post">
			
			<label>Name: </label>
			<input type="text" name="name" required> <br><br>

			<label>Age: </label>
			<input type="text" name="age" required> <br><br>

			<label>Creation Date: </label>
			<input type="datetime-local" name="datetime" required> <br><br>


			<input type="submit" name="send" value="Submit">
		</form>

		<?php  

			date_default_timezone_set("Europe/Lisbon");


			if (isset($_POST['send'])) {
				$name = $_POST['name'];
				$age = $_POST['age'];
				$datetime = date("Y-m-d H:i:s");

				if ($name != null and $age != null) {
					$pdo = new PDO('mysql:host=localhost;dbname=module_4','root', "");

					$sql = $pdo -> prepare("INSERT INTO `clients` VALUES (null,?,?,?)");

					$sql->execute(array($name,$age,$datetime));

					echo "<br>Account creation completed successfully!";
				}
			}

		

		?>
	</body>
</html>