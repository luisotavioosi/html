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
	    public function preDiagnosticar(){
	    	$imc = ($this->peso/($this->altura*$this->altura));
	    	if ($imc > 40) {
	    		echo "IMC indica : Obesidade Mórbida";
	    	}else if ($imc>35) {
	    		echo "IMC indica : Obesidade Grau II";
	    	}
	    	else if ($imc>30) {
	    		echo "IMC indica : Obesidade Grau I";
	    	}
	    	else if ($imc>25) {
	    		echo "IMC indica : Sobrepeso";
	    	}
	    	else if ($imc>18.5) {
	    		echo "IMC indica : Peso Ideal";
	    	}
	    	else{
	    		echo "IMC indica : Abaixo do Peso Ideal";
	    	}
	    	echo "<br/> <br/>";
	    }
	    
	    
	    public function infoProntuario(){
	    	echo "Dados Paciente <br/>";
			echo "Nome: " . $this->getNomeCliente() . "<br/>";
			echo "Data Nascimento: " . $this->getNascimento() . "<br/>";
			echo "Peso: " . $this->getPeso() . "<br/>";
			echo "Altura: " . $this->getAltura() . "<br/>";
	    }

	}

	$prontuario = new Prontuario();
	$prontuario->setNomeCliente("Luis Teles");
	$prontuario->setNascimento("xx/xx/95");
	$prontuario->setPeso(100);
	$prontuario->setAltura(1.00);
	$prontuario->infoProntuario();
	echo $prontuario->preDiagnosticar();

?>