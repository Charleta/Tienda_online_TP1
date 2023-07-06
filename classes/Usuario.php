<?php

namespace classes;
require_once 'Connection.php';
use PDO;

class Usuario
{
    protected $id;
    protected $email;
    protected $password;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    public function setId($id):void{
        $this->id=$id;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email):void{
        $this->email=$email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password):void{
        $this->password=$password;
    }

    public function getUserByUsername($usuario){
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM usuario WHERE usuario = :usuario";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute(
            [
                'usuario' => $usuario
            ]
        );
        $result = $stmt->fetch();
        if(!$result) return null;
        return $result;
    }
}