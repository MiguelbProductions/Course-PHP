<?php  

	function Autoload($class) {

		$class = str_replace('\\', '/', $class);

		if (file_exists("Classes/".$class.".php")) {
			include("Classes/".$class.".php");
		}
	}

	spl_autoload_register("Autoload");

?>