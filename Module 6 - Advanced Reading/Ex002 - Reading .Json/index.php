<?php  

	$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

	//var_dump(json_decode($json, true));

	$obj = json_decode($json);
	$array = json_decode($json, true);

	echo "Obj: ", $obj->b, "<br>";
	echo "Array: ", $array["b"], "<br><br>";

	$array = ["Guilherme" => "Name", 24 => "Age"];

	$json = json_encode($array);

	echo $json;

?>