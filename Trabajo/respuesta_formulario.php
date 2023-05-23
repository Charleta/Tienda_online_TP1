<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$libro = $_GET['libro'];
?>

<?php include ('secciones/headers.php')?>
    <main>
        <div class="formularioenviado">
            <p>¡Mensaje enviado exitosamente!</p>
            <h1>Muchas gracias por contactarnos, <?= $nombre ?></h1>
            <p>Recibimos tu solicitud sobre <span><?= $libro ?></span>, en los próximos días nos pondremos en contacto contigo para notificarte cuando el libro esté disponible.</p>
            <p>La notificación será enviada a: <span><?= $email ?></span></p>

            <a href="index.php" class="btn">Volver a inicio</a>
        </div>
    </main>
<?php include('secciones/footer.php')?>