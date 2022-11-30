<?php  
	/*

	$xml = simplexml_load_file("movie.xml");

	echo $xml->characters->character->name;

	*/

	$xml_array = ["Fast and Furious" => "Title","Brian O'Conner" => "Name_of_Actor" , "Paul Walker" => "Real_Name"];

	$xml = new SimpleXMLElement("<movie/>");

	array_walk_recursive($xml_array, array($xml, "addchild"));
	file_put_contents("movie.xml",$xml->asXML());	


?>