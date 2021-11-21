<!DOCTYPE html>

<html>

<body>
	<h1>2'nd Assignment: Arrays</h1>

	<?php
		$even_numbers = array(2, 4, 5, 8, 10);
		// $even_numbers = [2, 4, 5, 8, 10] ;  as PHP 5.4 

		$male_names = ["Adam", "Snow", "PewDiePie"];
		$female_names = ["Merry", "Sara", "Mona"]; 

		$names = array_merge ($male_names ,$female_names);

		sort($names, SORT_STRING | SORT_FLAG_CASE);
		print_r($names);

	?>
</body>

</html>