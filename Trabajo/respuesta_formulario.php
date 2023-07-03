<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$producto = $_GET['libro'];
?>

<?php include('secciones/headers.php') ?>

    <style>
        main {
            margin-top: 150px;
        }
    </style>
    <main>
        <div>
            <p>¡Mensaje enviado Correctamente!</p>
            <h1>Muchas gracias por contactarnos, <?= $nombre ?></h1>
            <p>Recibimos tu solicitud sobre <span><?= $producto ?></span>, en los próximos días nos pondremos en contacto contigo para notificarte cuando el producto este disponible y su costo.</p>
            <p>La notificación será enviada a: <span><?= $email ?></span></p>

            <a href="index.php" class="btn">Volver a inicio</a>
        </div>
    </main>
<?php include('secciones/footer.php') ?>