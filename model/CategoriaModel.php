<?php

require_once __DIR__ . "/../config/Database.php";

class CategoriaModel {

        private $conn;
        private $tabela = "categoria";

        public function __construct(){
            $db = new Database();
            $this->conn = $db->conectar();
        }

        public function listar(){
            $query = "SELECT * FROM $this->tabela";
            
            $stmt = $this->conn->prepare($query);
            $stmt ->execute();

            return $stmt->fetchALL();
    }

    public buscarPorId($id){
        $query = "SELECT * FROM 
            $this->tabela WHERE id = :id";

        $stmt = $this->conn
            ->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt ->execute();

        return $stmt->fetch();
    }
}