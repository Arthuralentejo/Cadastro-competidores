<?php include 'services/sessionMessage.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
</head>

<body>
    <p>Formulário para incrição de competidores</p>
    <?php 
        $mensagemSucesso = getSuccessMessage();
        if(!empty($mensagemSucesso)){
            echo $mensagemSucesso;
        }
        $mensagemErro = getErrorMessage();
        if(!empty($mensagemErro)){
            echo $mensagemErro;
        }
    ?>
    <form action="script.php" method="POST">
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" /></p>
    </form>
</body>

</html>