<?php  

	$previous_text = file_get_contents("info.txt");

	echo "<h3>The previous text: </h3>$previous_text";

	$content = "My new content created with PHP.\r\n<br>This is the sencond Line of document.";

	file_put_contents("info.txt", $content);

	echo "<h3>The actual text:</h3> $content";

?>