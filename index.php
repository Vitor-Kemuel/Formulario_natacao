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
    display: flex;
    justify-content: center;
}
.infantil{
    padding-left: 5%;
    padding-right: 5%;
}
.adolescente{
    padding-left: 5%;
    padding-right: 5%;
}
.adulto{
    padding-left: 5%;
    padding-right: 5%;
}
.mensagem_de_erro{
    background-color: red;
}
.categoria{
    background-color: lightgreen;
}
</style>

<body>
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
    <br>
    <div class="lista">
        <div class="infantil">
            <table border="1">
                <?php
                    $infantil = infantil();
                    echo '<th colspan=\'3\'>Infantil</th>';
                    echo '<tr><td>ID</td><td>Nome</td><td>Idade</td></tr>';
                    foreach ($infantil as $key => $value)
                    {
                        echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                    }
                ?>
            </table>
        </div>
        <div class="adolescente">
            <table border="1">
                <?php
                    $adolescente = adolescente();
                    echo '<th colspan=\'3\'>Adolescente</th>';
                    echo '<tr><td>ID</td><td>Nome</td><td>Idade</td></tr>';
                    foreach ($adolescente as $key => $value)
                    {
                        echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                    }
                ?>
            </table>
        </div>
        <div class="adulto">
            <table border="1">
                <?php
                    $adulto = adulto();
                    echo '<th colspan=\'3\'>Adulto</th>';
                    echo '<tr><td>ID</td><td>Nome</td><td>Idade</td></tr>';
                    foreach ($adulto as $key => $value)
                    {
                        echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</form>
</body>
</html>
