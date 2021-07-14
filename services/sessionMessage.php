<?php
session_start();
function setErrorMessage(string $mensagem) : void {
    $_SESSION['erro'] = $mensagem;
}

function getErrorMessage() : ?string{
    if(isset($_SESSION['erro'] )){
        return $_SESSION['erro'];
    }
    return null;
}

function setSuccessMessage(string $mensagem) : void {
    $_SESSION['success'] = $mensagem;
}

function getSuccessMessage() : ?string{
    if(isset($_SESSION['success'] )){
        return $_SESSION['success'];
    }
    return null;
}

function removeErrorMessage() : void{
    if(isset($_SESSION['erro'] )){
        unset($_SESSION['erro']);
    }
}

function removeSuccessMessage(){
    if(isset($_SESSION['success'] )){
        unset($_SESSION['success']);
    }
}