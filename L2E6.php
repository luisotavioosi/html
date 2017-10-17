<?php
	class ContaBancaria{
		public $correntista;

	public function getCorrentista($correntista){
		return $this->correntista;
	}
	public function setCorrentista($correntista){
		return $this->correntista = "Luis";
	}

}
	$cliente = new ContaBancaria();

		echo $cliente->setCorrentista($correntista);
?>