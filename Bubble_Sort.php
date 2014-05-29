<?php
function array_maker(){
	$array = array();
	for ($i=0; $i < 100; $i++) { 
		$temp = rand(0,10000);
		$array[] = $temp;
	}
	return $array;
}



?>