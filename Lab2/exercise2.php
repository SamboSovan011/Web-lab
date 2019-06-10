<?php 
	$B = array(4, 12, 31, 23, 7, 54, 13, 8, 13);
	$odd = array();
	$even = array();
	foreach ($B as $e) {
		if($e % 2 == 0){
			array_push($even, $e);
		}else{
			array_push($odd, $e);
		}
	}
	echo "<br>";
	echo "Odd array: ";
	foreach ($odd as $j) {
		echo $j." ";
	}
	echo "<br>";
	echo "Even array: ";
	foreach ($even as $k) {
		echo $k." ";
	}
 ?>