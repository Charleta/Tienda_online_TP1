<?php

class conection {

     public const DB_SERVER ="localhost";
     public const DB_USER ="root";
     public const DB_PASS="";
     public const DB_NAME="trabajo_productos";
     public const DB_DNS="mysql:host" . Conection::DB_SERVER .";dbname" . Conection::DB_NAME . ";charset=utf8mb4";

      protected PDO $db;

      public function __construct(){
          try{
          $this->db = new PDO(Connection::DB_DNS, Conection::DB_USER, Conection::DB_PASS);
      }catch (PDOException $e){
              echo "Error en la conexion: " . $e->getMessage();
          }
      }

    public function getConection(): PDO
    {
        return $this->db;

    }
}


