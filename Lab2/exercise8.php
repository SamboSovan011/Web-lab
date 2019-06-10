<?php
	
	function solve_2degree_equation($a, $b, $c){
		$d = $b*$b - (4*$a*$c);
		$dd = sqrt($d);

		if ($dd > 0) {
			$x1 = (-($b) + $dd)/(2*$a);
			$x2 = (-($b) - $dd)/(2*$a);
			echo "x1 = (-($b) + $dd)/(2*$a) = ".$x1."<br>";
			echo "x2 = (-($b) - $dd)/(2*$a) = ".$x2;
		}else if($dd < 0){

			echo "x1 = (-$b + i$dd) / ".(2*$a)."<br>";
			echo "x2 = (-$b - i$dd) / ".(2*$a)."<br>";
		}else{
			$x = -($b)/(2*$a);
			echo "x1 = x2 = ".$x;
		}
	}

	if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {
		solve_2degree_equation($_GET["a"], $_GET["b"], $_GET["c"]);
	}

	

 ?>