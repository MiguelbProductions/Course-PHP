<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Forms</title>
	</head>

	<body>

		<form method="post">
			
			<label>Name: </label>
			<input type="text" name="name"> <br><br>
			<label>Age: </label>
			<input type="text" name="age"> <br><br>
			<label>Email: </label>
			<input type="text" name="email"> <br><br>

			<input type="submit" name="send" value="Submit">

		</form>



		<?php  

			$name = $_POST['name'];
			$age = $_POST["age"];
			$email = $_POST['email'];

			if ($name != null and $age != null and $email != null) {
				echo $name, "<br>", $age, "<br>",$email;
			}

		?>


	</body>
</html>