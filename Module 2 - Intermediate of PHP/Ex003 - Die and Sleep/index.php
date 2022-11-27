<?php  

	sleep(2);

	echo "Thank's for wait for 2 seconds";

	$name = "Miguel";

	if ($name != "Miguel") {
		die("<br><br>The script has stopped for security reasons.");
	}

	echo ("<br><br>Hi Miguel!")
?>