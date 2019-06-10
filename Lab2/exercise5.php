<?php 

	$A = array(
		array('a', 'b', 'c'),
		array('d', 'e', 'f'),
		array('g', 'h', 'i')
	);

	$B = array(
		array('j', 'k', 'l'),
		array('m', 'n', 'p'),
		array('x', 'y', 'z')
	);

	$n = count($A);

	echo "Array addition (A + B) = ";
	for ($i=0; $i < $n; $i++) { 
		for ($j=0; $j < $n; $j++) { 
			echo $A[$i][$j]." + ".$B[$i][$j].", ";
		}
	}
 ?>