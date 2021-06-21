<?php

session_start();
include 'servico_DB.php';

function conect()
{
    $competidor = new Competidor();
    return $competidor;
}

function setar_erro(string $mensagem, string $complemento) : void
{
    $_SESSION['mensagem-de-erro'][0] = $mensagem;
    $_SESSION['mensagem-de-erro'][1] = $complemento;
}

function obter_erro() : ?string
{
    if(isset($_SESSION['mensagem-de-erro']))
    {
        return $_SESSION['mensagem-de-erro'][0];
    }
    return null;
}
function obter_complemento_erro(){
    return $_SESSION['mensagem-de-erro'][1];
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

function competidor($categoria){
    $_SESSION['competidor'] = conect()->list($categoria);

    if(isset($_SESSION['competidor']))
    {
        return $_SESSION['competidor'];
    }
    return null;
}

function exemplo() : string
{
    $_SESSION['nomes-exemplo'] = conect()->exemple_list();
    return $_SESSION['nomes-exemplo'];
}

?>
