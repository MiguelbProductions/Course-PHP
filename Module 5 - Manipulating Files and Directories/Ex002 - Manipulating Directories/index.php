<?php  
	
	if (is_dir("TestsFolder")) {
		echo "The Folder \"TestsFolder\" already exits!";

		// rmdir("TestsFolder");

		$handle = opendir("TestsFolder");

		echo "<br><h3>Files in Folder:</h3>";
		while ($file = readdir($handle)) {
			if ($file == "." or $file == "..") {
				continue;
			}
			echo "$file ";

		}

	} else { 
		echo "The Folder \"TestsFolder\" has been created!";
	}
	

?>