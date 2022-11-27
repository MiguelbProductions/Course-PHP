<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Math Operations</title>
</head>
	<body>
		<form method="post">

			<label>Number1: </label>
			<input type="text" name="num1"><br><br>
			<label>Number2: </label>
			<input type="text" name="num2"><br><br>

			<label>Operation: </label>
			<select name="Operations" id="Operations">
				<option value="Sum">Sum</option>
				<option value="Subtract">Subtract</option>
				<option value="Multiply">Multiply</option>
				<option value="Divide">Divide</option>
			</select>

			<br>

			

			<br><br>

			<input type="Submit" name="send" value="Submit">
		</form>

		<?php  

			if (isset($_POST['send'])) {

				if (isset($_POST['num1'])) {
					$num1 = $_POST['num1'];
				}
				if (isset($_POST['num2'])) {
					$num2 = $_POST['num2'];
				} 

				if ($num1 != null and $num2 != null) {
					if (isset($_POST['Operations'])) {
						$selected = $_POST['Operations'];

						if ($selected == "Sum") {
							$result = $num1 + $num2;
						} else if ($selected == "Subtract") {
							$result = $num1 - $num2;
						} else if ($selected == "Multiply") {
							$result = $num1 * $num2;
						} else if ($selected == "Divide") {
							$result = $num1 / $num2;
						}

						echo "<br>The result is $result";
					}
				}
			}


		?>
	</body>
</html>



