<?php  
	function ShowName() {
		echo "My name is Miguel";
	}

	ShowName();
	
	function ShowInformations($name, $age) {
		echo "<br><br>My name is $name and I have $age years old.";
	}

	ShowInformations("Miguel", 16);

	function calculator($num1 = 1, $num2 = 1, $operation = "Sum") {
		if ($operation == "Subtract") {
			$result = $num1 - $num2;
		} else if ($operation == "Multiply") {
			$result = $num1 * $num2;
		} else if ($operation == "Divide") {
			$result = $num1 / $num2;
		} else {
			$result = $num1 + $num2;
		}

		echo "<br><br>The result of $operation is $result";
	}

	calculator(3, 5, "Multiply");


	function grade_in_text($value) {
		if ($value >= 18 and $value <= 20) {
			return "Congratulations, you scored very well on the test. :)";
		} else if ($value >= 14 and $value < 18) {
			return "Nice, you scored well on the test :]";
		} else if ($value >= 9.5 and $value < 14) {
			return "Meh, you had a rather weak test score. :|";
		} else if ($value > 0 and $value < 9.5) {
			return "Oh no, you didn't pass the test :(";
		} else {
			return "The score is not valid!";
		}
	}

	$comentary_of_teacher = grade_in_text(16.3);

	echo "<br><br>The teacher said \"$comentary_of_teacher\""

?>