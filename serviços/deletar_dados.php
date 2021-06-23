<?php
    include 'servico_mensagem_sessao.php';
    if(isset($_POST['infantil'])){
        conect()->delete('infantil');
    }
    else if(isset($_POST['adolescente'])){
        conect()->delete('adolescente');
    }
    else if(isset($_POST['adulto'])){
        conect()->delete('adulto');
    }
    else if(isset($_POST['todas'])){

        conect()->delete_todas();
    }
    header("location: /index.php");
?>
