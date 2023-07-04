
    <style>

        .base_tarjeta{

            display: flex;
            align-items: center;
            justify-content: center;
            height: 500px;
            margin-top: 100px;

        }

        .card {
            width: 300px;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .card img {
            display: block;
            margin: 0 auto;
            width: 150px;
            border-radius: 50%;
        }

        .card h1 {
            margin-top: 10px;
            font-size: 24px;
            text-align: center;
        }

        .card p {
            font-size: 16px;
            text-align: center;
        }

        .card .contact {
            margin-top: 20px;
            text-align: center;
        }

        .card .contact a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>


<main>

    <?php
    use classes\Alumno;
    require_once 'classes/Alumno.php';

    $miAlumno = new Alumno();
    $alumno= $miAlumno->getAll();


    foreach ($alumno as $item){?>



<div class="base_tarjeta">
    <div class="card">
        <img src="<?php echo $item->getImagen();?>" alt="carlos Ortega" >
        <h1><?php echo $item->getNombre().' '.$item->getApellido();?></h1>
        <p>Programador Web</p>
        <ul class="contact">
            <li> Edad : <?php echo $item->getEdad()?></li>
            <li> Correo Electrónico : <?php echo $item->getCorreo()?></li>
            <li> instagram : <?php echo $item->getRedesSociales()?></li>
        </ul>
    </div>
</div>
</main>
    <?php
    }?>