<?php

$vista = $_GET['seccion'];
$method = $_GET['method'];

$vista = $method. "_". $vista;



$existe = file_exists("views/$vista.php");

$vista_final = $existe ? $vista : '404';

require "./partials/header.php"; ?>

<h1>Admin de mi Tiendita</h1>
<p>Esta es la página de inicio del admin de mi tiendita</p>

<?php include "views/$vista_final.php" ?>
<?php
require_once "../secciones/footer.php";
?>
</body>
