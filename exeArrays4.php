<?php
	function impares($num){
		$vetor_Impar = array();
		$j = 0;
		$TAM = sizeof($num);
		for($i = 0; $i < $TAM ; $i++){
			if(($num[$i]%2) == 1){
				$vetor_Impar[$j] = $num[$i];
				$j++;
			}
		}
		for ($i=0; $i<sizeof($vetor_Impar); $i++){
		    printf("[%d]", $vetor_Impar[$i]);
        }
	}
	
	$num = array(1,4,5,99,6,9,189);
	impares($num);


?>