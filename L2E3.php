<?php
	class ContaBancaria{
		public $saldo;
		private $agencia;
		private $num_conta;
		public function getAgencia($agencia){
			return $this->agencia;
		}
		public function setAgencia($agencia){
			return $this->agencia = $agencia;
		}
		public function getNum_conta($num_conta){
			return $this->$num_conta;
		}
		public function setNum_conta($num_conta){
			return $this->num_conta = $num_conta;
		}
		public function depositar($valor){
            $this->saldo += $valor;
  		}
		public function sacar($valor){
            if(($this->saldo > 0) && ($this->saldo >= $valor)){
                $this->saldo -= $valor;
    		}else{
       			echo "Saldo insuficiente <br />";    
    		}
  		}
  		public function verSaldo(){
            echo "Saldo Atual:".$this->saldo. "<br>";
  		}
 }
    
  $Conta = new ContaBancaria();
  $Conta->verSaldo();
  $Conta->depositar(500);
  $Conta->verSaldo();
  $Conta->sacar(150);
  $Conta->verSaldo();	
?>