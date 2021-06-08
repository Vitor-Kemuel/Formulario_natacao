<?php

session_start();

function setar_erro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obter_erro() : ?string
{
    if(isset($_SESSION['mensagem-de-erro']))
    {
        return $_SESSION['mensagem-de-erro'];
    }
    return null;
}

function setar_categoria(string $mensagem) : void
{
    $_SESSION['categoria'] = $mensagem;
}
function obter_categoria() : ?string
{
    if(isset($_SESSION['categoria']))
    {
        return $_SESSION['categoria'];
    }
    return null;
}

function remove_categoria() : void
{
    if(isset($_SESSION['categoria']))
    {
        unset($_SESSION['categoria']);
    }
}
function remove_erro() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
    {
        unset($_SESSION['mensagem-de-erro']);
    }
}

?>
