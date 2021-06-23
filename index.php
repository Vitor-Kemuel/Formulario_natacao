<?php
include "serviços/servico_mensagem_sessao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/deletar.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<header>
    <div class="barra_topo">
        <h3 class="logotipo">Natação</h3>
        <nav>
            <!-- <a href="serviços/deletar_dados.php">Deletar competidores</a> -->
            <a href="#deletar">Deletar competidores</a>
        </nav>
    </div>
</header>
<div class="entrada_informacao">
    <h1>Formulário para inscrição de competidores<hr></h1>
    <div class="dados_competidor">
        <div class="conteudo_entrada">
            <form action="script.php" method="post">
                <?php
                $mensagem_de_erro = obter_erro();
                if(empty($mensagem_de_erro)){
                ?>
                    <p>Seu Nome:<br><input class="caixa_de_texto dados_certos" class="caixa_de_texto_nome" type="text" name="nome" placeholder="Ex. <?php $nome = exemplo(); echo $nome; ?> " /></p>
                    <p>Sua idade:<br><input class="caixa_de_texto dados_certos caixa_idade"type="text" name="idade" placeholder="Ex. <?php echo rand(6, 99); ?>"/> anos</p>
                <?php
                }else if(obter_complemento_erro() == 'nome'){
                ?>
                    <p class="texto_de_erro">Seu Nome:<br><input class="caixa_de_texto erro_dados" type="text" name="nome" placeholder="Ex. <?php $nome = exemplo(); echo $nome; ?> " /></p>
                    <p>Sua idade:<br><input class="caixa_de_texto dados_certos caixa_idade" type="text" name="idade" placeholder="Ex. <?php echo rand(6, 99); ?>" /> anos</p>
                <?php
                } else{
                ?>
                    <p>Seu Nome:<br><input class="caixa_de_texto dados_certos" type="text" name="nome" placeholder="Ex. <?php $nome = exemplo(); echo $nome; ?>" /></p>
                    <p class="texto_de_erro">Sua idade:<br><input class="caixa_de_texto erro_dados caixa_idade" type="text" name="idade" placeholder="Ex. <?php echo rand(6, 99); ?>" /> anos</p>
                <?php
                }
                ?>
                <p><input class="btn_enviar" type="submit" value="Enviar dados" /></p>
            </form>
        </div>
        <?php
        if(!empty($mensagem_de_erro)){
        ?>
        <div class="mensagem_inscricao mensagem_de_erro">
            <?php
            echo $mensagem_de_erro;
            remove_erro();
            ?>
        </div>
        <?php
        }else{
            $categoria = obter_categoria();
            if(!empty($categoria)) { ?>
            <div class="mensagem_inscricao categoria">
            <?php
                echo $categoria;
                remove_categoria();
            }
        }
        ?>
        </div>
    </div>
</div>
<div class="lista">
    <?php
    $infantil = competidor('infantil');
    if(!empty($infantil)){
    ?>
        <div class="infantil">
            <table class="tabela_classificacao" border="1">
                <?php
                echo '<th colspan=\'3\'>Infantil</th>';
                echo '<tr><td width="50">Inscrição</td><td width="50">Nome</td><td width="50">Idade</td></tr>';
                foreach ($infantil as $key => $value)
                {
                    echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                }
                ?>
            </table>
        </div>
    <?php
    }
    $adolescente = competidor('adolescente');
    if(!empty($adolescente)){?>
        <div class="adolescente">
            <table class="tabela_classificacao" border="1">
                <?php
                echo '<th colspan=\'3\'>Adolescente</th>';
                echo '<tr><td width="50">Inscrição</td width="50"><td>Nome</td><td width="50">Idade</td></tr>';
                foreach ($adolescente as $key => $value)
                {
                    echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                }
                ?>
            </table>
        </div>
    <?php
    }
    $adulto = competidor('adulto');
    if(!empty($adulto)){ ?>
        <div class="adulto">
            <table class="tabela_classificacao" border="1">
                <?php
                echo '<th colspan=\'3\'>Adulto</th>';
                echo '<tr><td width="50">Inscrição</td><td width="50">Nome</td><td width="50">Idade</td></tr>';
                foreach ($adulto as $key => $value)
                {
                    echo '<tr><td>'.$value['id'] . '</td><td>' . $value['nome'] . '</td><td>'. $value['idade'].'</td></tr>';
                }
                ?>
            </table>
        </div>
    <?php
    }
    ?>
</div>

<div id="deletar">
    <div class="caixa_deletar">
        <a href="" id="fechar">X</a>
        <p>Qual classificação<br>deseja apagar?</p><hr>
        <div class="caixa_botoes_deletar">
            <form action="serviços/deletar_dados.php" method="post">
                <input class="botoes_deletar" type="submit" value="infantil" name="infantil" /><br>
                <input class="botoes_deletar" type="submit" value="adolescente" name="adolescente" /><br>
                <input class="botoes_deletar" type="submit" value="adulto" name="adulto" /><br>
                <input class="botoes_deletar" type="submit" value="todas" name="todas" /><br>
            </form>
        </div>
    </div>
</div>

</body>
</html>
