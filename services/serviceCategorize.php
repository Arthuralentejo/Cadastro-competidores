<?php


function categorize(String $nome, String $idade) : ?string {
    $categorias = ['infantil','adolescente','adulto'];

    if (validaNome($nome) && validaIdade($idade)) {
        if($idade>=6 && $idade <=12){
            foreach($categorias as $i){
                if($i == 'infantil'){
                    setSuccessMessage("O nadador ".$nome." compete na categoria ".$i);
                    return null;
                }
            }
        
        } else if($idade>=13 && $idade <=18){
            foreach($categorias as $i){
                if($i == 'adolescente'){
                    setSuccessMessage("O nadador ".$nome." compete na categoria ".$i);
                    return null;
                }
            }
        }
        else{
            foreach($categorias as $i){
                if($i == 'adulto'){
                    setSuccessMessage("O nadador ".$nome." compete na categoria ".$i);
                    return null;
                }
            }
        
        }
    }
    else{
        return getErrorMessage();
    }

}