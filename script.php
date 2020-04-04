<?php

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

// verifica se o nome esta zerado
if(empty($nome)){
    echo "O nome nao pode ficar vazio";
    return;
}

// verifica se o nome esta com menos de 3 caracteres
if(strlen($nome) < 3){
    echo "O nome deve conter mas de 3 caracteres";
    return;
}

// verifica se o nome é muito grande
if(strlen($nome) > 50){
    echo "O nome é muito extenso";
    return;
}

// verifica a variavel idade se tem numero
if(!is_numeric($idade)){
    echo "Informe um numero para idade";
    return;
}

if($idade >=6 && $idade <=12){
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
        {
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}else if($idade >=13 && $idade<=17){
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolescente')
        {
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}else{
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
        {
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
        }
    }
}

