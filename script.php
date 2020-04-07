<?php

session_start();

// variavel do tipo array 
$categorias = [];

// dados do array
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];



if($idade >=6 && $idade <=12){
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
    }
}else if($idade >=13 && $idade<=17){
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
    }
}else{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location: index.php');
            return;
        }
    }
}

