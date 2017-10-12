<?php
	function multi($num){
		$mult = array();
		$n = $num;
		for($i = 0; $i <= 10; $n++){
			if(($n%$num) == 0){
				$mult[$i] = $n;
				$i++;
			}
		}
		for ($i =0; $i<sizeof($mult); $i++){
		    printf("\n");
		    echo $mult[$i];
        }
		
	}
	
	$num = 6;
	multi($num);
	
?>