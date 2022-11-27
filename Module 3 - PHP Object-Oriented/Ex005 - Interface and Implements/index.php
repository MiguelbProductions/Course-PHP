<?php  

	include("interface1.php");

	class test implements interface1{

		public function sayhi() {
			echo "Hi!";
		}


	}


	$test1 = new test;

	$test1->sayhi();

?>