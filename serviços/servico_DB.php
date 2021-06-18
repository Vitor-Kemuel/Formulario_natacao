<?php

class Competidor
{
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=competicao_natacao', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function exemple_list() : ?string
    {
        try
        {
            $sql = 'select * from exemplo_nomes where id='.rand(1, 60);

            $nome = $this->conexao->query($sql);

            return $nome;

        }catch(Exception $e){
            echo $e ->getMessage();
        }finally{
            $nomes = 'Brian Potter,Tracy Walker,Bethany Weber,Angel Flores,Anthony Patterson,'
            .'Amanda Adams,Christopher Rose,Marcus Walker,Samantha Lopez,Angela Martin DDS,'
            .'Natalie Madden,Keith Medina,Ian Miller,Andrew Nelson,Maria Day,Candace Guzman,'
            .'Tracey Mullins,Stephanie Delacruz,Cheryl Sanford,Katelyn Wells';
            $nomes = explode(',', $nomes);
            foreach($nomes as $values){
                $sql = 'insert into exemplo_nomes(nome) values(:nome)';

                $prepare = $this->conexao->prepare($sql);
                $prepare->bindParam(':nome', $values);
                $prepare->execute();
            }
            return $nomes[rand(1, 10)];
        }
    }

    public function list($categoria) : ?array
    {
        $sql = 'select * from '.$categoria;

        $competidores = [];

        foreach ($this->conexao->query($sql) as $key => $value)
        {
            array_push($competidores, $value);
        }

        return $competidores;
    }

    public function insert(string $categoria,string $nome,int $idade) : int
    {
        $sql = 'insert into '. $categoria .'(nome, idade) values(:nome, :idade)';
        echo $sql;

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(':nome', $nome);
        $prepare->bindParam(':idade', $idade);

        $prepare->execute();

        return $prepare->rowCount();
    }
}

?>
