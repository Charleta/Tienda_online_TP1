<?php

?>

<div class="row">
    <div class="col-12">
        <h1 class="text-center my-5">Agregar Producto</h1>
        <form class="row" action="actions/añadirProducto_accion.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input class="form-control" id="nombre" name="nombre" placeholder="">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen producto</label>
                <input class="form-control" id="imagen" name="imagen" placeholder="">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input class="form-control" id="precio" name="precio" placeholder="">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">descripcion</label>
                <input class="form-control" id="descripcion" name="descripcion" placeholder="">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">categoria</label>
                <input class="form-control" id="categoria" name="categoria" placeholder="">
            </div>
            <div class="mb-3">
                <label for="garantia" class="form-label">garantia</label>
                <input class="form-control" id="garantia" name="garantia" placeholder="">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">color</label>
                <textarea class="form-control" id="color" name="color" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </div>
        </form>
    </div>
</div>