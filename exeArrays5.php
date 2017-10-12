<html>
	<head>
		<title>lista 1 ex4</title>
	</head>
	
	<body>
		<form method="GET">
			<input type="text" name = "nome1" required>
			<br />
			<input type="text" name = "nome2" required>
			<input type="submit">
		</form>
	</body>
	<?php
		$nom1 = $_GET['nome1'];
		$nom2 = $_GET['nome2'];

            if (strrev($nom1) == $nom2) {
                echo "Inverso";
        }else{
			echo "Não inverso";
		}
	?>
</html>