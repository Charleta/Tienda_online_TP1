<?php

require_once "../../classes/Producto.php";
require_once "../../classes/Connection.php";
$postData = $_POST;


print_r($postData);

$productos = (new \classes\Producto());
$productos->baja (
    $postData['id'],


);
