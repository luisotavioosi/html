<?php
	class principalBanco
	{
	    public static function main(){
	    	$cliente = new Cliente();
			$cliente->setNome("Luis");
			$cliente->setEndereco("Rua1");
			$cliente->setTelefone("5555-4434");
			$cliente->setRg("234.432.21");
			$cliente->setCpf("432.543.211");

			

			$cliente = new Cliente();
			$cliente->setNome("Luis2");
			$cliente->setEndereco("Rua2");
			$cliente->setTelefone("5565-4434");
			$cliente->setRg("234.452.21");
			$cliente->setCpf("432.433.211");

			$c = new ContaBancaria();
			$c->depositar(858);
			$c->sacar(77);
			echo "Conta Luis2 <br />";
			echo $c->getSaldo() . "<br/>";
			
			$c = new ContaBancaria();
			$c->depositar(1000);
			$c->sacar(111);
				echo "Conta Luis<br />";
			echo $c->getSaldo() . "<br/>";
		
	    }
	}
	class Cliente{
		public $nome;
		public $endereco;
		public $telefone;
		public $rg;
		public $cpf;
		public function getNome($nome){
			return $this->nome;
		}
		public function setNome($nome){
			return $this->nome = $nome;
		}
		public function getEndereco($endereco){
			return $this->$endereco;
		}
		public function setEndereco($endereco){
			return $this->endereco = $endereco;
		}
		public function getTelefone($telefone){
			return $this->$telefone;
		}
		public function setTelefone($telefone){
			return $this->telefone = $telefone;
		}
		public function getRg($rg){
			return $this->$rg;
		}
		public function setRg($rg){
			return $this->rg = $rg;
		}
		public function getCpf($cpf){
			return $this->$cpf;
		}
		public function setCpf($cpf){
			return $this->cpf = $cpf;
		}
}
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
  		public function getSaldo(){
            echo "Saldo Atual:".$this->saldo. "<br>";
  		}
 }
	principalBanco::main();
?>