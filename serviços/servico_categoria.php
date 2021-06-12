<?php

function definir_categoria($idade, $nome, $competidor) : ?string
{
    if(valida_nomes($nome) and valida_idade($idade))
    {
        remove_erro();
        if($idade >= 6 and $idade <= 12)
        {
            setar_categoria($nome .' se encontra na categoria infantil');
            $competidor -> insert('infantil', $nome, $idade);
            return null;
        }
        else if($idade >= 13 and $idade < 18)
        {
            setar_categoria($nome .' se encontra na categoria adolescente');
            $competidor -> insert('adolescente', $nome, $idade);
            return null;
        }
        else
        {
            setar_categoria($nome .' se encontra na categoria adulto');
            $competidor -> insert('adulto', $nome, $idade);
            return null;
        }
    }
    else
    {
        remove_categoria();
        return obter_erro();
    }
}
?>
