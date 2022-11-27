<?php  
	
	/*
	final class parent1 {

		public function showhelloparent1() {
			echo "Hello I'm parent 1.";
		}

	}

	class child1 extends parent1  {


		public function showhellochild1() {
			echo "Hello I'm child 1.";
		}
	}


	$child1 = new child1;
	$child1->showhellochild1();

	*/



	class parent2 {

		public function showhelloparent2() {
			echo "Hello I'm parent 2.";
		}

		protected function showProtected() {
			echo "Hi I'm a protected function.";
		}

		private function showPrivate() {
			echo "Hi I'm a private function.";
		}


	}
	
	class child2 extends parent2 {


		public function showhellochild2() {
			echo "Hello I'm child 2.";

			echo "<br>"; 

			// $this->showPrivate();
			$this->showProtected();
		}
	}

	$child2 = new child2;

	$child2->showhelloparent2();
	
	echo "<hr>";

	$child2->showhellochild2();



?>