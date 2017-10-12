<?php
	if(!isset($_COOKIE['logged'])){
		if(isset($_POST['login'])){
			$nome = $_POST['login'];
			$senha = $_POST['senha'];
			if($nome == "luis" && $senha == "6666"){
				setcookie('logged', $nome);
				header("Location: helloWorld.php");
			}
			else{
				header("Location: login.php?Message=LoginIncorreto");
			}
		}
		else{
			header("Location: login.php?Message=AutenticaçãoInvalida");
		}
	}
?>