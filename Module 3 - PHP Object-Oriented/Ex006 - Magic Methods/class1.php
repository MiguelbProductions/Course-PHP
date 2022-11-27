<?php  

	class MagicClass {
		
		private $name = "";
		private $age = 0;

		public function __construct($name = "", $age = 0) {
			$this->name = $name;
			$this->age = $age;
		}

		public function showinformations() {
			echo "Name: ".$this->name." <br>Age: ".$this->age;
		}

		public function getname_of_class() {
			echo "<hr>Name of fuction: ". get_class($this);
		}

	}

?>