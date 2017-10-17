<?php
	/**
	* 
	*/
	class Aritmetica
	{
		public function testarInteiros($num1, $num2){
			$soma = $num1 + $num2;
				echo "Soma $num1 + $num2: $soma<br />";
			$subtracao = $num1 - $num2;
				echo "Subtração $num1 - $num2: $subtracao<br />";
			$multi = $num1 * $num2;
				echo "Multiplicação $num1 * $num2: $multi<br />";
			$divisao = $num1 / $num2;
				echo "Divisão $num1 / $num2: $divisao<br />";
			}
		 public function multiplos($num1, $num2){
	 		if ($num1 > $num2){
				if(($num1 % $num2) == 0){
					echo "Multiplos";
				}else
					echo "Não multiplos";
			}else{
				if (($num2 % $num1) == 0) {
					echo "Multiplos";
				}else
					echo "Não multiplos";
			}	
		}
	}
	$num1 = 9;
	$num2 = 7;
	$op = new Aritmetica();
	$op->testarInteiros($num1, $num2);
	$op->multiplos($num1, $num2);


?>