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

					if ($num1 > $num2) {
						echo "<br>First number is greater than the second";
					} else if ($num1 < $num2) {
						echo "<br>Second number is greater than the first";
					} else if ($num1 == $num2) {
						echo "<br>The two numbers are equals";
					}
				}

			}


		?>
	</body>
</html>



