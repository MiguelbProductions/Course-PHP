<?php  

	$brands = ["BRAND OF CARS"=>["BMW", "Lamborguini", "Ferrari", "Alfa Romeo", "Citroen"], "BRANDS OF FONES" => ["Samsung", "Hawei", "Xiaomi", "Iphone", "Nokia"]];

	foreach ($brands as $index_x => $brand) {
		
		echo "<h3>".$index_x."</h3>";

		foreach($brand as $index_y => $product) {
			echo $product, "<br>";
		}

	}
?>