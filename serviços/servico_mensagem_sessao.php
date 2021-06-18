<?php

session_start();
include 'serviços/servico_DB.php';

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

function infantil()
{
    $_SESSION['infantil'] = conect()->list('infantil');

    if(isset($_SESSION['infantil']))
    {
        return $_SESSION['infantil'];
    }
    return null;
}

function adolescente()
{
    $_SESSION['adolescente'] = conect()->list('adolescente');

    if(isset($_SESSION['adolescente']))
    {
        return $_SESSION['adolescente'];
    }
    return null;
}

function adulto()
{
    $_SESSION['adulto'] = conect()->list('adulto');

    if(isset($_SESSION['adulto']))
    {
        return $_SESSION['adulto'];
    }
    return null;
}
function exemplo() : string
{
    $_SESSION['nomes-exemplo'] = conect()->exemple_list();
    return $_SESSION['nomes-exemplo'];
}

?>
