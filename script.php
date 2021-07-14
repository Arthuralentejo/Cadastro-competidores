<?php
$categorias = ['infantil','adolescente','adulto'];


$nome = $_POST['nome'];
$idade = $_POST['idade'];

// var_dump($nome);
// var_dump($idade);
if($idade>=6 && $idade <=12){
    foreach($categorias as $i){
        if($i == 'infantil'){
            echo "O nadador ".$nome." compete na categoria ".$i;
        }
    }

} else if($idade>=13 && $idade <=18){
    foreach($categorias as $i){
        if($i == 'adolescente'){
            echo "O nadador ".$nome." compete na categoria ".$i;
        }
    }
}
else{
    foreach($categorias as $i){
        if($i == 'adulto'){
            echo "O nadador ".$nome." compete na categoria ".$i;
        }
    }

}