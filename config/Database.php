<?php

class Database {
    private $host = "localhost";
    private $port = "3306";
    private $dbName= "site adm";
    private $user = "root";
    private $password = "";

    public function conectar(){
        $url = "mysql:host=$this->host;port=$this->port;dbName=$this->dbName";
        $conn = new PDO($url, $this->user, $this->password);
        return $conn;
    }
}
?>