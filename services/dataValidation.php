<?php
function validateName(string $name) : bool {
    if(empty($name)){
        setErrorMessage('O nome não pode ser vazio ');

        return false;
    } else if (strlen($name) < 3 ){
        setErrorMessage('O nome não pode conter menos de 3 caracteres ');

        return false;
    }else if (strlen($name) > 40 ){
        setErrorMessage('O nome não pode conter mais de 40 caracteres ');
        
        return false;       
    }
    return true;
}
function validateAge(string $age){
    if(!is_numeric($age)){
        setErrorMessage('Informe um valor válido para a idade ');
        
        return false;
    }
    return true;
}
