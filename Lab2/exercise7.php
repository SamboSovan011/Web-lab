<?php 
	
	function area_cylinder($r, $h){
		$A = (2*pi()*$r*$h) + (2*pi()*pow($r, 2));
		echo "The area of cylinder A = ".$A;
	}
	if (isset($_GET["radius"]) && isset($_GET["height"])) {
		area_cylinder($_GET["radius"], $_GET["height"]);
	}

 ?>