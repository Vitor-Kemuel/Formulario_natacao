<?php
include "serviços/servico_mensagem_sessao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
body{
    background-color: skyblue;
    text-align: center;
}
.lista{
    flex-direction: row;
}
.mensagem_de_erro{
    background-color: red;
}
.categoria{
    background-color: lightgreen;
}
</style>

<body>
<div>
    <p>Formulário para inscrição de competidores</p>
    <form action="script.php" method="post">
        <p>Seu Nome:<br> <input type="text" name="nome" /></p>
        <p>Sua idade:<br> <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados" /></p>

        <div class="mensagem_de_erro">
            <?php
                $mensagem_de_erro = obter_erro();
                if(!empty($mensagem_de_erro))
                {
                    echo $mensagem_de_erro;
                }
            ?>
        </div>

        <div class="categoria">
            <?php
                $categoria = obter_categoria();
                if(!empty($categoria))
                {
                    echo $categoria;
                }
            ?>
        </div>
    </form>
</div>
</body>
</html>
