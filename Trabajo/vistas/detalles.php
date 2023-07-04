<?php

use classes\Producto;

$id = isset($_GET['id']) ? $_GET['id'] : 0;

require_once 'classes/Producto.php';

$miProducto = new Producto();
$productos = $miProducto -> getAll();

function filtrarPorId($productos, $id) {
    $detalles = [];
    foreach ($productos as $pr) {
        if ($pr->getId() == $id) {
            $detalles[] = $pr;
        }
    }
    return $detalles;
}
$detalles = filtrarPorId($productos, $id);

print_r($detalles)
?>

<style>


main{
    margin-top: 100px;
}

    .breadcumbs {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .detalles {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .detalles img {
        width: 300px;
        height: auto;
        margin-bottom: 20px;
    }

    .detalles > div {
        width: 100%;
    }

    .detalles h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .detalles h2 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .detalles p {
        margin-bottom: 10px;
    }

    .detalles ul {
        list-style-type: none;
        margin-bottom: 10px;
    }

    .detalles ul li {
        margin-bottom: 5px;
    }

    .detalles ul li span {
        font-weight: bold;
    }

    .detalles button {
        width: 200px;
        border-radius: 20px;
        height: 35px;
        background-color: #1e0707;
        text-align: center;
        font-size: 20px;
        text-decoration: none;
        color: white;
        cursor: pointer;
    }

    .detalles button:hover {
        background-color: #555;
    }

</style>


<main>
   <?php ;foreach ($detalles as $item) {

    ?>
    <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > <a href="index.php?seccion=product">Categoria</a> > <?= $item->getNombre() ?></p>




    <div class="detalles">
        <img src="<?= $item->getImagen() ?>" alt="Portada del libro <?= $item->getNombre() ?>">
        <div>
            <div>
                <h1><?= $item->getNombre() ?></h1>
                <p><span>Color:</span> <?= $item->getColor() ?></p>
                <p>$<?= $item->getPrecioFormateado()?> </p>
                <button>Agregar al carrito</button>
            </div>


            <p><?= $item->getDescripcion() ?></p>

            <h2>Garantia</h2>
            <ul>
                <li> <?= $item->getGarantia() ?></li>

            </ul>

        </div>
    </div>


</main><?php
}
?>