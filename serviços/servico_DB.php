<?php

$pdo = new PDO('mysql:host=localhost;dbname=competicao_natacao', 'root', '');

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
