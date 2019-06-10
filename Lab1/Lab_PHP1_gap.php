<?php
	
	$arr = range('A', 'Z');
	$str = "KILL JOHN";
	$gap = 4;
	$n = strlen($str);
	$result = "";

	for ($i=0; $i < $n; $i++) { 
		$GroupChar = "";
		for ($j=0; $j < $gap-1; $j++) { 
			$index = array_rand($arr);
			$char = $arr[$index];
			$GroupChar.= $char;
		}
		$result.= $str[$i].$GroupChar;

	}

	echo $result;
?>