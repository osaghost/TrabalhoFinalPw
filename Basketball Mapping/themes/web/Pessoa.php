<?php
class Pessoa{

    private $pdo;

    public function __contruct($DB, $host, $user, $password)
    {
        try {
            $this->pdo = new PDO(
            "mysql:dbname=" . $DB .
            ";host=" . $host,
            $host,
            $password,);
        } catch (PDOException $e) {
            echo "Erro com banco de dados"
            exit()
        }
       
    }
    public function buscarDados(
        {
            $cmd = this->pdo->prepare("SELECT * FROM user ORDER BY ID")
        }
    )
}
=