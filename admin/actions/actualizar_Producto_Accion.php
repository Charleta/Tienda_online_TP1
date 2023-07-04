<?php

require_once "../../classes/Producto.php";
require_once "../../classes/Connection.php";

$postData = $_POST;

try {

    $productos = (new \classes\Producto());
    $productos->actualizar(
        $postData['id'],
        $postData['nombre'],
        $postData['descripcion'],
        $postData['precio'],
        $postData['imagen'],
        $postData['categoria'],
        $postData['garantia'],
        $postData['color']
    );

}catch (Exception $e) {
    echo $e->getMessage();
}
