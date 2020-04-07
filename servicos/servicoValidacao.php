<?php

// verifica se o nome esta zerado
if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'o nome nao pode ser vazio';
    header('location: index.php');
    return;
}

// verifica se o nome esta com menos de 3 caracteres
else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mas de 3 caracteres';
    header('location: index.php');
    return;
}

// verifica se o nome é muito grande
else if(strlen($nome) > 50){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return; 
}

// verifica a variavel idade se tem numero
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um numero para idade';
    header('location: index.php');
    return;
}