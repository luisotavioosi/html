<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>
        Informe notas
    </title>
</head>
<body>
<div style="background: #a2ffad" >
    <img src="icone_assinatura__1.png" width="40px" height="40px" align="top">
    <h1 align="center" > <strong> Formulário de Notas</strong> </h1>


</div>
    <div style="background: #e2e6ff">
    <form name="Informe notas" method="post" action="formaluno.php">
        Nome: <input name="nome" type="text" placeholder="Your Name Here" autofocus required></br></br></br></br></br>
        Primeira Nota: <input name="nota1" type="number"   size="5" min="0" max="10" required/><br><br>
        Segunda Nota: <input name="nota2" type="number" size="5" min="0" max="10" required/><br><br>
        Terceira Nota: <input name="nota3" type="number" size="5" min="0" max="10" required/><br><br>
        Quarta Nota: <input name="nota4" type="number" size="5" min="0" max="10" required/><br><br>
        <input type="submit" value="Enviar"><br><br><br>

    </form>
    </div>
    <div style="background: #a2ffad">
    <?php
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;
        if($media >= 7){

            echo "O aluno: $nome está aprovado com média: $media";
        }
        elseif (media >=4 or media < 7){
            echo "O aluno: $nome está de recuperação com média: $media";
        }
        else{
            echo "O aluno: $nome está reprovado com média: $media";
        }


    ?>
    </div>

</body>
</html>