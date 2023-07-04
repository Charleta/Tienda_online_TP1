<?php

require_once "../classes/Autenticacion.php";



require "./partials/header.php"; ?>

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
<div style="width: 800px">
<p>Esta es la página de inicio del admin de la tienda</p>
</div>
</div>
<?php include "views/login.php" ?>
<?php
require_once "../secciones/footer.php";
?>
</body>
