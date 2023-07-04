<?php

?>

<div class="row">
    <div class="col-12">
        <h1 class="text-center my-5">Agregar Producto</h1>
        <form class="row" action="actions/baja_producto_accion.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id" class="form-label">baja producto</label>
                <input class="form-control" id="id" name="id" placeholder="">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </div>
        </form>
    </div>
</div>