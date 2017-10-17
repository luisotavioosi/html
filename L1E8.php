<?php
	
	class Prontuario
	{
		private $nomeCliente;
		private $nascimento;
		private $peso;
		private $altura;

		public function getNomeCliente(){
	    	return $this->nomeCliente;
	    }
	    public function setNomeCliente($nomeCliente){
	    	$this->nomeCliente = $nomeCliente;
	    }
	    public function getNascimento(){
	    	return $this->nascimento;
	    }
	    public function setNascimento($nascimento){
	    	$this->nascimento = $nascimento;
	    }
	    public function getPeso(){
	    	return $this->peso;
	    }
	    public function setPeso($peso){
	    	$this->peso = $peso;
	    }
	    public function getAltura(){
	    	return $this->altura;
	    }
	    public function setAltura($altura){
	    	$this->altura = $altura;
	    }

	    public function infoProntuario(){
	    	echo "Paciente <br/>";
			echo "Nome:" . $this->getNomeCliente()." <br/>";
			echo "Data Nascimento:" .$this->getNascimento() ." <br/>";
			echo "Peso:".  $this->getPeso()." <br/>";
			echo "Altura:". $this->getAltura()."<br/>";
	    }

	}

	$prontuario = new Prontuario();
	$prontuario->setNomeCliente("Luis Teles");
	$prontuario->setNascimento("xx/xx/95");
	$prontuario->setPeso("100");
	$prontuario->setAltura("2.10");
	$prontuario->infoProntuario();

?>