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
			<label>Number3: </label>
			<input type="text" name="num3"><br><br>

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

				if (isset($_POST['num3'])) {
					$num3 = $_POST['num3'];
				} 

				if ($num1 != null and $num2 != null and $num3 != null) {

					if ($num1 > $num2 and $num1 > $num3) {
						echo "<br>First number is greater than the second and third number";
					} else if ($num2 > $num1 and $num2 > $num3) {
						echo "<br>Second number is greater than the first and third number";
					} else if ($num3 > $num1 and $num3 > $num2) {
						echo "<br>Third number is greater than the first and second number";
					} else if ($num1 > $num2 and $num1 == $num3) {
						echo "<br>First number is equal tho the third number but greater than the second number";
					} else if ($num1 > $num3 and $num1 == $num2) {
						echo "<br>First number is equal tho the second number but greater than the third number";
					} else if ($num2 > $num1 and $num2 == $num3) {
						echo "<br>Second number is equal tho the third number but greater than the first number";
					} else if ($num2 > $num3 and $num2 == $num1) {
						echo "<br>Second number is equal tho the first number but greater than the third number";
					} else if ($num3 > $num2 and $num3 == $num1) {
						echo "<br>Third number is equal tho the first number but greater than the second number";
					} else if ($num3 > $num1 and $num3 == $num2) {
						echo "<br>Third number is equal tho the second number but greater than the first number";
					} else if ($num1 == $num2 and $num1 == $num3) {
						echo "<br>The three numbers are equals";
					}
				}

			}


		?>
	</body>
</html>



