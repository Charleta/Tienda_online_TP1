<?php

namespace classes;
require_once 'Connection.php';
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
        $query = "SELECT * FROM productos WHERE baja = 0";
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

    public function getPrecioFormateado()
    {
        return number_format($this->getPrecio(), 2, ',', '.');
    }
    public function getDescripcion(){
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

    public function addProducto($nombre, $precio, $descripcion, $imagen, $categoria, $garantia, $color) {
        $conexion = (new Connection())->getConection();
        $query = "INSERT INTO productos (nombre, precio, descripcion, imagen, categoria, garantia, color) VALUES (:nombre, :precio, :descripcion, :imagen, :categoria, :garantia, :color)";
        $stmt = $conexion->prepare($query);
        $stmt->execute(
            [
                'nombre' => $nombre,
                'precio' => $precio,
                'descripcion' => $descripcion,
                'imagen' => $imagen,
                'categoria' => $categoria,
                'garantia' => $garantia,
                'color' => $color

            ]) ;
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->fetch() ;
    }

    public function actualizar($id, $nombre,$descripcion, $precio,  $imagen, $categoria, $garantia, $color) {
        $conexion = (new Connection())->getConection();
        $query = "UPDATE productos SET " .
            "nombre = :nombre, " .
            "precio = :precio, " .
            "imagen = :imagen, " .
            "descripcion = :descripcion, " .
            "categoria = :categoria, " .
            "garantia = :garantia, " .
            "color = :color " .
            "WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->execute(
            [
                'id' => $id,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'precio' => $precio,
                'imagen' => $imagen,
                'categoria' => $categoria,
                'garantia' => $garantia,
                'color' => $color

            ]
        ) ;
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->fetch() ;
    }
    public function baja($id) {
        $conexion = (new Connection())->getConection();
        $query = "UPDATE productos SET baja = 1 WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->execute(
            [
                'id' => $id,
                'baja' => $baja,
            ]
        ) ;
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->fetch() ;
    }
}








