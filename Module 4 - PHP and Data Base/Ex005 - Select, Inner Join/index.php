<?php  

	$pdo = new PDO('mysql:host=localhost;dbname=module_4','root', "");

	$sql = $pdo -> prepare("SELECT * FROM posts");

	$sql -> execute();

	$info = $sql->fetchAll();

	echo "<pre>";
	print_r($info);
	echo "</pre>";

	foreach($info as $key => $information) {
		echo "<hr>ID: ".$information["ID"]."<br>TITLE: ".$information["Title"]."<br>Content: ".$information["Content"];

	}

	echo "<br><br><br><br>";

	for ($information = 0; $information < count($info); $information++) {
		echo "<hr>ID: ".$info[$information]["ID"]."<br>TITLE: ".$info[$information]["Title"]."<br>Content: ".$info[$information]["Content"];
	}

	echo "<br><br><br><br>";

	$pdo = new PDO("mysql:host=localhost; dbname=module_4","root","");

	$sql = $pdo -> prepare("SELECT * FROM categories");

	$sql -> execute();

	$info = $sql -> fetchAll();

	foreach ($info as $key => $category) {
		$id = $category['ID'];

		$sql_posts = $pdo -> prepare("SELECT * FROM posts WHERE Category_id=?");

		$sql_posts -> execute([$id]);

		$info_posts = $sql_posts -> fetchAll();

		foreach ($info_posts as $key => $post) {
			echo "<hr>Title: ". $post['Title'] ."<br>Content: ". $post['Content'];  
		}
	}

	echo "<br><br><br><br>";

	$pdo = new PDO("mysql:host=localhost; dbname=module_4","root","");

	$sql = $pdo -> prepare("SELECT *,`posts`.`ID` AS `post_id` FROM posts INNER JOIN categories ON `posts`.`category_id` = `categories`.`ID`");

	$sql -> execute();

	$info = $sql -> fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
	print_r($info);
	echo "</pre>";
?>