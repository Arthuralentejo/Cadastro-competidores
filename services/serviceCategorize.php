<?php


function categorizeCompetitor(String $name, String $age) : ?string {
    $categories = ['infantil','adolescente','adulto'];

    if (validateName($name) && validateAge($age)) {
        removeErrorMessage();
        if($age>=6 && $age <=12){
            foreach($categories as $i){
                if($i == 'infantil'){
                    setSuccessMessage("O nadador ".$name." compete na categoria ".$i);
                    return null;
                }
            }
        
        } else if($age>=13 && $age <=18){
            foreach($categories as $i){
                if($i == 'adolescente'){
                    setSuccessMessage("O nadador ".$name." compete na categoria ".$i);
                    return null;
                }
            }
        }
        else{
            foreach($categories as $i){
                if($i == 'adulto'){
                    setSuccessMessage("O nadador ".$name." compete na categoria ".$i);
                    return null;
                }
            }
        
        }
    }
    else{
        removeSuccessMessage();
        return getErrorMessage();
    }

}