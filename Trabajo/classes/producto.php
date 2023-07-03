<?php

namespace classes;

use PDO;

class Producto {
    protected $id;
    protected $nombre;
    protected $precio;
    protected $descripcion;
    protected $imagen;
    protected $categoria;
    protected $garantia;
    protected $color;


    public function getAll():array {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM productos";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();


    }
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getImagen() {
        return $this->imagen;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    public function getGarantia(){
        return $this->garantia;
    }
    public function getColor(){
        return $this->color;
    }

}








