

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>~Ex010</title>
</head>
	<body>

		<?php  
			session_start();

			if (isset($_POST['name'])) {
				$_SESSION['name'] = $_POST['name'];

				if ($_SESSION['name'] == "delete") {
					unset($_SESSION['name']);
				} 
			}

			if (isset($_POST['age'])) {
				setcookie("age", $_POST['age'], time() + 60, "/");

				if ($_POST['age'] == "delete") {
					setcookie("age", "", time() - 5, "/");
				} 
			}
			
		?>

		<form method="post">
			<h3>Session</h3>
			<label>Name: </label>
			<input type="text" name="name"><br><br>

			<input type="submit" name="send"><br><br>

			
		</form>
		<form method="post">
			<h3>Cookie</h3>
			<label>Age: </label>
			<input type="text" name="age"><br><br>

			<input type="submit" name="send"><br><br>
		</form>


	</body>
</html>