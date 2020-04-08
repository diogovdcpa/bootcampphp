<?php

function validaNome(string $nome) : bool
{
        // verifica se o nome esta zerado
    if(empty($nome))
    {
        setarMensagemErro('o nome nao pode ser vazio');
        return false;
    }

    // verifica se o nome esta com menos de 3 caracteres
    else    if(strlen($nome) < 3)
    {
        setarMensagemErro('O nome deve conter mas de 3 caracteres') ;
         return false;
    }

    // verifica se o nome é muito grande
    else if(strlen($nome) > 50)
    {
        setarMensagemErro('O nome é muito extenso');
         return false; 
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        // verifica a variavel idade se tem numero
        setarMensagemErro('Informe um numero para idade');
        return false;
    }
    return true;
}

?>




