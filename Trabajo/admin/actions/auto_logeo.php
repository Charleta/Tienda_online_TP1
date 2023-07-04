<?php

require_once "../../classes/Autenticacion.php";
require_once "../../classes/Connection.php";
require_once "../../classes/Usuario.php";

$postData = $_POST;

$login = ((new \classes\Autenticacion())->logIn($postData["email"], $postData["password"]));

if($login) {
    header('location: ../index.php?seccion=producto&method=agregar');
} else {
    header('location: ../index.php?seccion=login');
}