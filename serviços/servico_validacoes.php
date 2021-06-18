<?php

function valida_nomes(string $nome) : bool
{
    if(empty($nome))
    {
        setar_erro('O campo do nome não pode estar vazio', 'nome');
        return false;
    }
    else if(strlen($nome)<3)
    {
        setar_erro('O nome precisa de pelo menos 3 caracteres', 'nome');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setar_erro('O nome pode conter apenas 40 caracteres(espaços são considerados)', 'nome');
        return false;
    }
    return true;
}

function valida_idade(string $idade) : bool
{
    if (empty($idade))
    {
        setar_erro('É necessario digitar a idade', 'idade');
        return false;
    }
    else if(!is_numeric($idade))
    {
        setar_erro('A idade precisa ser um número', 'idade');
        return false;
    }
    else if(strlen($idade)< 1)
    {
        setar_erro('O campo idade não pode estar vazio', 'idade');
        return false;
    }
    else if(strlen($idade)> 2)
    {
        setar_erro('O numero digitado na idade é muito grande', 'idade');
        return false;
    }
    else if($idade < 6)
    {
        setar_erro('Competidor não se enquadra em nenhuma das categotias', 'idade');
        return false;
    }
    return true;
}

?>
