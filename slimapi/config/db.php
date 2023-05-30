<?php
class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '123456';
    private $dbname = 'slim-api';

    public function connect(){
        try {
            $conn_str = "mysql:host=$this->host;dbname=$this->dbname";
            $pdo = new PDO($conn_str, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            die("Failed to connect to database: " . $e->getMessage());
        }
    }
}