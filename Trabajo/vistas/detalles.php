<?php

    $id=$_GET['id'];

include_once ('libs/obtenerProductos.php');

$productos = obtenerProductos();
$producto=$productos[$id];
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

    <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > <a href="index.php?seccion=books">Libros</a> > <?= $producto['nombre'] ?></p>

    <div class="detalles">
        <img src="<?= $producto['imagen'] ?>" alt="Portada del libro <?= $producto['nombre'] ?>">
        <div>
            <div>
                <h1><?= $producto['nombre'] ?></h1>
                <p><span>Color:</span> <?= $producto['color'] ?></p>
                <p>$<?= $producto['precio'] ?> USD</p>
                <button>Agregar al carrito</button>
            </div>


            <p><?= $producto['descripcion'] ?></p>

            <h2>Garantia</h2>
            <ul>
                <li> <?= $producto['garantia'] ?></li>

            </ul>

        </div>
    </div>


</main>