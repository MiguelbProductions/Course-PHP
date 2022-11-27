<?php  

	date_default_timezone_set("Europe/Lisbon");

	$date = date("d/m/Y H:i:s", time() + 3600);

	echo $date;

?>