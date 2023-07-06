
<?php
session_start();

session_unset();
session_destroy();

$vista = $_GET['seccion'];
$vista = $vista ? $vista : 'home'; ?>

<?php include('secciones/headers.php') ?>

<?php include ("vistas/$vista.php") ?>

<?php include('secciones/footer.php') ?>