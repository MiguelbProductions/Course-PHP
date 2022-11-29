<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex001_2</title>

	<style type="text/css">
		#title {
			padding: 0px;
		}

		#HtmlGenerator {
			background-color: lightskyblue;
			width: 11.5%;

			padding: 5px 20px 20px 20px;
			border: 3px solid black;
		}

	</style>
</head>
	<body>

		<form method="post" id="HtmlGenerator">
			<h3 id="title">Html Generator</h3>
			
			<input type="text" name="name"> <br><br>

			<input type="submit" name="download" value="Download"> 
			<input type="submit" name="clone" value="Clone">

		</form>

		<?php  
	
			if (isset($_POST['download'])) {
				
				if ($_POST['name'] != null) {
					$content = file_get_contents($_POST['name']);

					file_put_contents("CodeHtml.txt", $content);

					header('Content-Type: application/download');
				    header('Content-Disposition: attachment; filename="CodeHtml.txt"');
				    header("Content-Length: " . filesize("CodeHtml.txt"));

				    $fp = fopen("CodeHtml.txt", "r");
				    fpassthru($fp);
				    fclose($fp);
				}
				
			} 

			if (isset($_POST['clone'])) {
				if ($_POST['name'] != null) {
					$url = $_POST['name'];

					$content = file_get_contents($url);

					file_put_contents("CodeHtml.html", $content);

					header('Content-Type: application/download');
				    header('Content-Disposition: attachment; filename="CodeHtml.html"');
				    header("Content-Length: " . filesize("CodeHtml.html"));

				    $fp = fopen("CodeHtml.html", "r");
				    fpassthru($fp);
				    fclose($fp);
				}


			}
			

		?>

	</body>
</html>


