<?php 
	
	function fibonacci1($num, $n, $t){
		if ($n == $num) {
			echo "Un = ".$t;
			echo "<br>";
			echo "After running fibonacci recursion time(milisecond) = ".round(microtime(true)*1000);
		}else{
			$t += $n;
			$n++;
			fibonacci1($num, $n, $t);
		}
	}

	function fibonacci2($num){
		$t = 0;
		for ($i=0; $i <= $num; $i++) { 
			if ($i == $num) {
				echo "Un = ".$t;
				echo "<br>";
				echo "After running fibonacci loop time(milisecond) = ".round(microtime(true)*1000);
			}else{
				$t += $i;
			}
		}
	}

	if (isset($_GET["n"])) {
		echo "Before run fibonancci recursion method time (milisecond) = ".round(microtime(true)*1000);
		echo "<br>";
		fibonacci1($_GET["n"],0 , 0);
		echo "<br>";
		echo "Before run fibonancci loop method time (milisecond) = ".round(microtime(true)*1000);
		echo "<br>";
		fibonacci2($_GET["n"]);

	}


	

 ?>