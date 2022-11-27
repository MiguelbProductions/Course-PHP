<?php  
	session_start();

	echo "<h3>Session</h3>";

	echo $_SESSION['name'];


	echo "<h3>Cookie</h3>";

	echo $_COOKIE['age'];
?>