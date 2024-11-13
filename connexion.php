<?php
class Connexion{
    private $pdo;
    function __construct(){
        $dsn = "mysql:host=localhost;dbname=Ecommerce";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn,$user,$pw);
    }

    function getConnexion(){
        return $this->pdo;
    }
}


?>