<?php
function validaNome(string $nome) : bool {
    if(empty($nome)){
        setErrorMessage('O nome não pode ser vazio ');

        return false;
    } else if (strlen($nome) < 3 ){
        setErrorMessage('O nome não pode conter menos de 3 caracteres ');

        return false;
    }else if (strlen($nome) > 40 ){
        setErrorMessage('O nome não pode conter mais de 40 caracteres ');
        
        return false;       
    }
    return true;
}
function validaIdade(string $idade){
    if(!is_numeric($idade)){
        setErrorMessage('Informe um valor numérico para a idade ');
        
        return false;
    }
    return true;
}
