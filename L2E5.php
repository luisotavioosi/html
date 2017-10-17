<?php
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
		public function imprimeTudo($nome, $endereco, $telefone, $rg, $cpf){
			echo "Nome: $nome<br />";
			echo "Endereço: $endereco<br />";
			echo "Telefone: $telefone<br />";
			echo "RG: $rg <br />";
			echo "CPF: $cpf<br />";
		}

	}

	$cliente = new Cliente();
	$nome = "Luis Otavio";
	$endereco = "Rua 1";
	$telefone = "(86) 99999-9999";
	$rg = "111.111.11";
	$cpf = "342.323.422-87";
	$cliente->imprimeTudo($nome, $endereco, $telefone, $rg, $cpf);
		
?>