<?php

use classes\Producto;
require_once 'classes/Connection.php';
require_once 'classes/Producto.php';


$miProductoS = new Producto();
$producto = $miProductoS->getAll();


?>




<style>

    main {
        padding: 20px ;
        max-width: 1300px;
        width: 100%;
        margin: auto;
    }

.titulo_h2{
    text-align: center;
}


div h2 {
    margin-left: 25px;
    font-size: 55px;
    font-weight: bold;
    color: #3f1515;
}
    .card {
        display: inline-block;
        width: 300px;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 20px;
        height: 400px;
        vertical-align: top;
        background-color: white;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;

    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        margin-bottom: 10px;



    }

    .card h2 {
        margin: 0;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
    }

    .card p {
        margin: 5px 0;
        font-size: 14px;
        text-align: center;
    }
    .contenedor_cards{
        display: grid ;
        grid-template-columns: repeat(4, 1fr); /* 4 columnas con ancho igual */
        grid-gap: 20px;
    }
    @media (max-width: 980px) {
        .contenedor_cards {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 450px) {
        .contenedor_cards {
            grid-template-columns: 1fr;
        }
    }
    .boton_detalles {
        align-items: center;
        justify-content: center;
        display: flex;

    }
    .boton_detalles a {
        width: 200px;
        border-radius: 20px;
        height: 35px;
        background-color: #3f1515;
        text-align: center;
        font-size: 20px;
        text-decoration: none;
        color: white;

    }

</style>

<main>

<header>
<div class="titulo_h2">
<h2>Todos nuestros productos</h2>
</div>
    <p>Conoce algunos de nuestros productos que estamos trayendo al mercado..</p>
    <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > <a href="index.php?seccion=product">Productos</a> </p>
</header>

<div class="contenedor_cards">
            <?php


            foreach ($producto as $item) {
                ?>
                <div class="card">
                    <img src="<?php echo $item->getImagen(); ?>" alt="<?php echo $item->getNombre(); ?>">
                    <h2><?php echo $item->getNombre(); ?></h2>
                    <p><?php echo $item->getDescripcion(); ?></p>
                    <p style="text-align: center;font-size: 25px;font-weight: bold;color: #007bff;padding: 5px">$<?php echo $item->getPrecioFormateado(); ?></p>
                    <div class="boton_detalles">
                        <a href="index.php?seccion=detalles&id=<?= $item->getId()?> ">Detalles</a>
                    </div>
                </div>
                <?php
            }?>


</div>


</main>
