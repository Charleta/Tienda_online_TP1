<?php

require_once "../../classes/Producto.php";
require_once "../../classes/Connection.php";

$postData = $_POST;



try {
    $productos = (new \classes\Producto());
    $productos->addProducto(
        $postData['nombre'],
        $postData['precio'],
        $postData['descripcion'],
        $postData['imagen'],
        $postData['categoria'],
        $postData['garantia'],
        $postData['color']
    );
}catch (Exception $e) {
    echo $e->getMessage();
}
