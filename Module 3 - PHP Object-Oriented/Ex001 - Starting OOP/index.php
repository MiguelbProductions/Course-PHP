<?php  

	class People {

		private $name = "Simão";
		private $age = 16;
		private $height = 1.74;

		public function crescer() {
			echo "I'm growing!";

		}

		private function morrer() {
			echo "I died :(";
		}

	}

	$person1 = new People;

	$person1->crescer();

	// $person1->morrer();
?>