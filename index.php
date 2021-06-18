<?php
include "serviços/servico_mensagem_sessao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/main.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="entrada_informacao">
    <h1>Formulário para inscrição de competidores</h1>
    <form action="script.php" method="post">
        <?php
        $mensagem_de_erro = obter_erro();
        if(!empty($mensagem_de_erro)){
            if(obter_complemento_erro() == 'nome'){ ?>
                <div class="mensagem_de_erro">
                <?php
                echo $mensagem_de_erro;?>
                </div>
                <p class="texto_de_erro">Seu Nome:<br><input class="caixa_de_texto erro_dados" type="text" name="nome" placeholder="Ex. <?php $nome = exemplo(); echo $nome; ?> " /></p>
                <p>Sua idade:<br><input class="caixa_de_texto dados_certos caixa_idade" type="text" name="idade" placeholder="Ex. <?php echo rand(6, 99); ?>" /> anos</p>
                <?php
            } else{    ?>
                <p>Seu Nome:<br><input class="caixa_de_texto dados_certos" type="text" name="nome" placeholder="Ex. <?php $nome = exemplo(); echo $nome; ?>" /></p>
                <div class="mensagem_de_erro">
                <?php
                echo $mensagem_de_erro;?>
                </div>
                <p class="texto_de_erro">Sua idade:<br><input class="caixa_de_texto erro_dados caixa_idade" type="text" name="idade" placeholder="Ex. <?php echo rand(6, 99); ?>" /> anos</p>
            <?php
            }
        remove_erro();
        }else{  ?>
        <p>Seu Nome:<br><input class="caixa_de_texto dados_certos" class="caixa_de_texto_nome" type="text" name="nome" placeholder="Ex. <?php $nome = exemplo(); echo $nome; ?> " /></p>
        <p>Sua idade:<br><input class="caixa_de_texto dados_certos caixa_idade"type="text" name="idade" placeholder="Ex. <?php echo rand(6, 99); ?>"/> anos</p>
        <?php
        }   ?>
        <p><input class="btn_enviar" type="submit" value="Enviar dados" /></p>
<?php
    $categoria = obter_categoria();
    if(!empty($categoria)) { ?>
        <div class="categoria">
        <?php
        echo $categoria;
        ?>
        </div>
    <?php } remove_categoria(); ?>
<div class="lista">
<?php
    $infantil = infantil();
    if(!empty($infantil)){?>
    <div class="infantil">
        <table class="tabela_classificacao" border="1">
            <?php
                echo '<th colspan=\'3\'>Infantil</th>';
                echo '<tr><td width="50">ID</td><td width="50">Nome</td><td width="50">Idade</td></tr>';
                foreach ($infantil as $key => $value)
                {
                    echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                }
            ?>
        </table>
    </div>
<?php } ?>
<?php
    $adolescente = adolescente();
    if(!empty($adolescente)){?>
    <div class="adolescente">
        <table class="tabela_classificacao" border="1">
            <?php
                echo '<th colspan=\'3\'>Adolescente</th>';
                echo '<tr><td width="50">ID</td width="50"><td>Nome</td><td width="50">Idade</td></tr>';
                foreach ($adolescente as $key => $value)
                {
                    echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                }
            ?>
        </table>
    </div>
<?php } ?>
<?php
    $adulto = adulto();
    if(!empty($adulto)){ ?>
    <div class="adulto">
        <table class="tabela_classificacao" border="1">
            <?php
                echo '<th colspan=\'3\'>Adulto</th>';
                echo '<tr><td width="50">ID</td><td width="50">Nome</td><td width="50">Idade</td></tr>';
                foreach ($adulto as $key => $value)
                {
                    echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                }
            ?>
        </table>
    </div>
<?php } ?>
</div>
</div>
</form>

</body>

</html>
