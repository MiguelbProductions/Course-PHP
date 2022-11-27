<?php  
	
	class Example {

		public $name;
		private $age = 17;
		public static $date_of_creation = "27/11/2022 13:17";

		public function sayhello() {
			echo "Hello";

			$this->sayBye();
		}

		private function sayBye() {
			echo "<br>Bye";
		}

		public static function creator_informations() {
			echo "My name is Joaquim. <br>I have 17 years old.";
		}

		public function addage($age) {
			$this->age = $this->age + $age;

			return $this->age;
		}

	}


?>