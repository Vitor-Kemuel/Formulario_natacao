<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];

include "serviços/servico_mensagem_sessao.php";
include "serviços/servico_validacoes.php";
include "serviços/servico_categoria.php";

definir_categoria($idade, $nome, conect());

header("location: index.php");
    
?>
