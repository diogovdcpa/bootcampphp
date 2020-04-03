<?php

// variavel do tipo array 
$categorias = [];

// dados do array
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

// print_r($categorias);

$nome = 'Eduardo';
$idade = 12;

// var_dump($nome);  
// var_dump($idade);

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

