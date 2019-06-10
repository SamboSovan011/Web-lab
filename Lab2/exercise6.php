<?php 


	
	function time_hello($curr_time){
		$curr_sec = strtotime($curr_time);
		if($curr_sec >= strtotime("05:00:00") && $curr_sec <= strtotime("11:59:00")){
			echo "Good Morning";
		}else if($curr_sec >= strtotime("12:00:00") && $curr_sec <= strtotime("16:59:00")){
			echo "Good Afternoon";
		}else{
			echo "Good Evening";
		}
	}
	
	if(isset($_GET["time"])){
		echo "Yes, time is set! <br>";
		time_hello($_GET["time"]);
	}

	
 ?>