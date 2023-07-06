
<style>

    .base_tarjeta{

        display: flex;
        align-items: center;
        justify-content: center;
        height: 500px;
        margin-top: 100px;

    }

    .card {
        width: 400px;
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 20px;
        margin-bottom: 10%;
        color: #08192b;
        box-shadow: rgba(148, 181, 234, 0.56) 0px 22px 70px 4px;
    }

    .card img {
        display: block;
        margin: 0 auto;
        width: 200px;
        border-radius: 30%;
    }

    .card h1 {
        margin-top: 10px;
        font-size: 24px;
        text-align: center;
        font-weight: bold;
    }

    .card p {
        font-size: 16px;
        text-align: center;
    }

    .contact{
        list-style-type: none;
        font-size: 15px;
    }

    .bold{
        font-weight: bold;
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
            <div class="con-contac">
                <ul class="contact">
                    <li> <span class="bold"> Edad :</span> <?php echo $item->getEdad()?></li>
                    <li> <span class="bold"> Correo Electrónico :</span> <?php echo $item->getCorreo()?></li>
                    <li> <span class="bold"> instagram :</span> <?php echo $item->getRedesSociales()?></li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php
}?>