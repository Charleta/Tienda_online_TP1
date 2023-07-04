<?php

require_once "../../classes/Producto.php";
require_once "../../classes/Connection.php";
$postData = $_POST;

try {

    $productos = (new \classes\Producto());
    $productos->baja(
        $postData['id'],

    );
}catch (Exception $e) {
    echo $e->getMessage();
}
