<?php

namespace classes;

require_once "Connection.php";
use PDO;

class Usuario
{
    protected $id;
    protected $username;
    protected $password;



    public function getId()
    {
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
  public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username){
        $this->username=$username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function getUserByUsername($username){
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM usuario WHERE usuario = :username";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute(
            [
                'username' => $username
            ]
        );
        $result = $stmt->fetch();
        if(!$result)
            return null;
        return $result;
    }
    }

