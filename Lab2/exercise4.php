<?php 

	$A = array(
		array('a', 'b', 'c'),
		array('d', 'e', 'f'),
		array('g', 'h', 'i'),
		array('j', 'k', 'l')
	);
	$n = count($A);
	$m = count($A[0]);

	echo "Matrix A = ";
	for ($k=0; $k < $n; $k++) { 
		for ($t=0; $t < $m; $t++) { 
			echo $A[$k][$t]." ";
		}
	}
	echo "<br> Matrix A^t = ";
	for ($i=0; $i < $m; $i++) { 
		for ($j=0; $j < $n; $j++) { 
			echo $A[$j][$i]." ";
		}
	}
 ?>