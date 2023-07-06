<?php

session_start();

require_once "../../classes/Autenticacion.php";
require_once "../../classes/Connection.php";
require_once "../../classes/Usuario.php";

$postData = $_POST;


$login = (new \classes\Autenticacion())->logIn($postData["username"], $postData["password"]);



if($login){
    $_SESSION["username"] = $postData["username"];
    $_SESSION["password"] = $postData["password"];
    header ("Location: ../index.php?seccion=agregar_producto");
    exit();
} else {
    header ("Location: ../index.php?seccion=login&error=Usuario o contraseña incorrectos");
    exit();
}

