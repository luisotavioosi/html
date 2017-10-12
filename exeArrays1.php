<?php
	function inverte($vetor){
		$vetor_Invertido = array_reverse($vetor, true);
		
		return $vetor_Invertido;
	}
	$vetor = array(1,2,3,4, 5, 6);
	
	$resp = inverte($vetor);
	
	print_r($resp);
	for($i=sizeof($vetor); $i>=0; $i--){
	    echo "[$vetor[$i]]";


    }
?>