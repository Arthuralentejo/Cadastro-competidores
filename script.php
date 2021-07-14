<?php
session_start();
$categorias = ['infantil','adolescente','adulto'];


$nome = $_POST['nome'];
$idade = $_POST['idade'];
if(empty($nome)){
    $_SESSION['erro'] = 'O nome não pode ser vazio ';
    header('location: index.php');
    return;
}
// var_dump($nome);
// var_dump($idade);
if($idade>=6 && $idade <=12){
    foreach($categorias as $i){
        if($i == 'infantil'){
            $_SESSION['success'] = "O nadador ".$nome." compete na categoria ".$i;
            header('location: index.php');
            return;
        }
    }

} else if($idade>=13 && $idade <=18){
    foreach($categorias as $i){
        if($i == 'adolescente'){
            $_SESSION['success'] = "O nadador ".$nome." compete na categoria ".$i;
            header('location: index.php');
            return;
        }
    }
}
else{
    foreach($categorias as $i){
        if($i == 'adulto'){
            $_SESSION['success'] = "O nadador ".$nome." compete na categoria ".$i;
            header('location: index.php');
            return;
        }
    }

}