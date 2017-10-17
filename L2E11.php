<?php
	include "L2E10.php";
	class principalClinica
	{
	    public static function main() {
	    	$prontuario = new Prontuario();
			$prontuario->setNomeCliente("Luis do futuro");
			$prontuario->setNascimento("xx/xx/95");
			$prontuario->setPeso(120);
			$prontuario->setAltura(2.00);
			$prontuario->infoProntuario();
			
			echo $prontuario->preDiagnosticar();


	    }
	}

	
	principalClinica::main();

?>