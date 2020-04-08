<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{

// dados do array
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

    if(validaNome($nome) && validaIdade($idade))
    {
        if($idade >=6 && $idade <=12){
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'Infantil')
                {
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]) ;
                   return null;
                }
            }
        }else if($idade >=13 && $idade<=17){
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'Adolescente')
                {
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
                   return null;
                }
            }
        }else{
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'Adulto')
                {
                    setarMensagemSucesso("O nadador ".$nome." compete na categoria ".$categorias[$i]);
                   return null;
                }
            }
        }
    }else
    {
        return obterMensagemErro();
    }
}

?>