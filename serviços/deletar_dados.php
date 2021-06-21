<?php
    include 'servico_mensagem_sessao.php';
    conect()->delete();
    header("location: /index.php");
?>
