<?php  

	abstract class father {

		public function sayhello() {
			echo "Hello!";
		}

		abstract function saygoodmorning();

	}

	class child extends father{

		public function saybye() {
			echo "<br>Bye!";

			// $this->saygoodnight();
			self::saygoodnight();
		}

		public function saygoodmorning() {
			echo "<br>Good Morning!";
		}

		public function saygoodnight() {
			echo "<br>Good Night!";
		}


	}

	/*
	$father1 = new father;

	$father1->sayhello();
	$father1->saygoodmorning();
	*/

	$child = new child();

	$child->sayhello();
	$child->saygoodmorning();
	$child->saybye();
	
?>