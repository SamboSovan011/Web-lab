<?php
	$arr = range('A', 'Z');
	$cipher = "KHOOR ZRUOG, L DP FV.";
	$shift = 3;
	$result = "";
	$n = strlen($cipher);

	for ($i=0; $i < $n; $i++) { 
		if(in_array($cipher[$i], $arr)){
			$index = array_search($cipher[$i], $arr);
			$key = ($index - $shift)%26;
			$result.= $arr[$key];
		}else{
			$result.= $cipher[$i];
		}
	}
	echo $result;

?>