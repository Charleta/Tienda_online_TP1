
<?php $vista = $_GET['seccion'];
    $vista = $vista ? $vista : 'home'; ?>

<?php include('secciones/headers.php') ?>

<?php include ("vistas/$vista.php") ?>

<?php include('secciones/footer.php') ?>