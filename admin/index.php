<?php
session_start();
require_once "../classes/Autenticacion.php";


if(isset($_SESSION["username"])){
    $vista = $_GET["seccion"];
} else {
    $vista = "login";
}


$vista = $vista ? $vista : 'login';
require "partials/header.php";

?>

<style>
    .titulo {
        text-align: center;
        margin-top: 20px;
    }
    .conenedor_p{
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>
<div class="titulo">
    <h1>Admin de Tienda</h1>
</div>
<div class="conenedor_p">

</div>
<?php include "views/$vista.php";   ?>


<?php
require_once "../secciones/footer.php";
?>
</body>
