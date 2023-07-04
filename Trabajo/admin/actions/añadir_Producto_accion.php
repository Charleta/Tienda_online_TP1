<?php

require_once "../../classes/producto.php";
require_once "../../classes/Connection.php";
$postData = $_POST;


print_r($postData);

$productos = (new \classes\Producto());
$productos->addProducto (
    $postData['nombre'],
    $postData['precio'],
    $postData['descripcion'],
    $postData['imagen'],
    $postData['categoria'],
    $postData['garantia'],
    $postData['color']
);

