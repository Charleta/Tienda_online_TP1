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


?>

    <style>


        main{
            margin-top: 100px;
        }

        .breadcumbs {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .contenedor_detalles{
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 5%;
            margin-top: 5%;
        }
        .detalles {
            display: flex;
            align-items: center;
            gap: 20px;
            background-color: #2E93FF;
            padding: 20px;
            border-radius: 20px;
            box-shadow: rgba(148, 181, 234, 0.56) 0px 22px 70px 4px;
            color: #08192b;

        }

        .detalles img {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 20px;
        }

        .detalles div {
            flex: 1;
        }

        .detalles h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .detalles p {
            margin-bottom: 5px;
        }

        .detalles p span {
            font-weight: bold;
        }

        .detalles button {
            padding: 10px 20px;
            background-color: #08192b;
            color: #ffffff;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            margin-top: 2%;
        }

        .detalles p,
        .detalles ul {
            font-size: 16px;
        }

        .detalles h2 {
            font-size: 20px;
            margin-top: 20px;
        }

        .detalles ul {
            margin-left: 20px;
        }

        @media screen and (max-width: 768px) {
            .detalles {
                flex-direction: column;
            }

            .detalles img {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .detalles button {
                width: 100%;
            }
        }


    </style>


    <main>
<?php ;foreach ($detalles as $item) {

    ?>
    <p class="breadcumbs"><a href="index.php?seccion=home">Inicio</a> > <a href="index.php?seccion=product">Categoria</a> > <?= $item->getNombre() ?></p>



    <div class="contenedor_detalles">

        <div class="detalles">
            <img src="<?= $item->getImagen() ?>" alt="Portada del libro <?= $item->getNombre() ?>">
            <div>
                <div>
                    <h1><?= $item->getNombre() ?></h1>
                    <p><span>Color:</span> <?= $item->getColor() ?></p>
                    <p>$<?= $item->getPrecioFormateado()?> </p>

                </div>


                <p><?= $item->getDescripcion() ?></p>

                <h2>Garantia</h2>
                <ul>
                    <li> <?= $item->getGarantia() ?></li>
                    <button>Agregar al carrito</button>
                </ul>

            </div>
        </div>
    </div>

    </main><?php
}
?>