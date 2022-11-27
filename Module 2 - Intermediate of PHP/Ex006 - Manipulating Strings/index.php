<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>

		<?php  

			$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

			echo substr($content, 0, 20), "<br><br>";

			$random_name = "João Marco Julio Dinis";

			$random_name = explode(" ", $random_name);

			print_r($random_name);

			$random_name = implode(" ", $random_name);

			$random_htmlcode = "<h1>The Worst Processors of Intel</h1> <p>Intel I3 5216...</p>";

			echo $random_htmlcode;

			$random_text = strip_tags($random_htmlcode);

			echo $random_text;

			$random_htmlcode2 = "<div> This a simple block <div> <span> This is a in-line text </span>";

			echo "<br><br>", $random_htmlcode2; 

			echo "<br><br>", htmlentities($random_htmlcode2);

		?>

	</body>
</html>


