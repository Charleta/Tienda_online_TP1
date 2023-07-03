<?php


function obtenerProductos() {
    $content = file_get_contents('data/info.json'); //string
    $data = json_decode($content, true); //object


    return $data['productos'];
}


function filtrarPorCategoria ($productos, $categoria) {

    $productos_filtrados = [];
    foreach ( $productos as $producto){
        if ($producto ['categoria'] == $categoria) {
            $productos_filtrados[] = $producto;
        }

    }
    return $productos_filtrados;
}

?>;


