<?php include 'services/serviceSession.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
</head>

<body>
    <p>Formulário para incrição de competidores</p>
    <?php 
        $successMessage = getSuccessMessage();
        if(!empty($successMessage)){
            echo $successMessage;
        }
        $errorMessage = getErrorMessage();
        if(!empty($errorMessage)){
            echo $errorMessage;
        }
    ?>
    <form action="script.php" method="POST">
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" /></p>
    </form>
</body>

</html>