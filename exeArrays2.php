<?php
function operacao($n1, $n2){
	$soma = $n1 + $n2;
	$produto = $n1 * $n2;
	$mod = $n1 % $n2;
	echo "Números [$n1, $n2]<br>";
	echo "Soma: ".$soma."<br>" ;
	echo "Produto: ".$produto."<br />";
	echo "Resto: ".$mod;
}
    $num1 = 5;
    $num2 = 2;
    operacao($num1, $num2);

?>