<?php

namespace classes;
use PDO;
require_once 'Connection.php';
class Carrito_compras
{
    protected $id;
    protected $id_producto;
    protected $id_usuario;
    protected $cantidad;

    public function getAll(): array
    {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM carrito_compras";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    public function getId_producto()
    {
        return $this->id_producto;
    }
    public function getId_usuario()
    {
        return $this->id_usuario;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function agregarCarrito($id_producto, $id_usuario, $cantidad)
    {
        $conexion = (new Connection())->getConection();
        $query = "INSERT INTO carrito_compras (id_producto, id_usuario, cantidad) VALUES (:id_producto, :id_usuario, :cantidad)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id_producto', $id_producto);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->execute();

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
        $_SESSION['carrito'][] = [
            '$id_producto' => $id_producto,
            '$id_usuario' => $id_usuario,
            '$cantidad' => $cantidad
        ];
    }
}