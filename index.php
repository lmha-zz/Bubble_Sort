<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bubble Sort</title>
</head>
<body>
	<?php
	function array_maker() {
		$rand_array = array();
		for ($i=0; $i < 100; $i++) { 
			$rand_array[] = rand(0,10000);
		}
		return $rand_array;
	}
	function array_ascender($array) {
		foreach ($array as $value) {
			for ($i=0; $i < count($array)-1; $i++) { 
				if ($array[$i] > $array[$i+1]) {
					$temp = $array[$i];
					$array[$i] = $array[$i+1];
					$array[$i+1] = $temp;
					$i++;
				}
			}
		}
		return $array;	
	}
	$myArray = array_maker();
	echo "<h1>Unsorted Array: </h1>";
	var_dump($myArray);

	echo "<h1>Sorted Array: </h1>";
	$time_start = microtime(true);
	$sorted_array = array_ascender($myArray);
	$time_end = microtime(true);
	var_dump($sorted_array);
	echo $time_end-$time_start;
	?>
</body>
</html>