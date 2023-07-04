<?php

namespace classes;
require_once 'Connection.php';
use PDO;

class Alumno
{
    protected $id;

    protected $nombre;

    protected $apellido;
    protected $edad;
    protected $redes_sociales;
    protected $correo;
    protected $imagen;


    public function getAll(): array
    {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM alumno";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getRedesSociales()
    {
        return $this->redes_sociales;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getImagen()
    {
        return $this->imagen;
    }
}