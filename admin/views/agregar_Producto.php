<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }
    .row{
        padding-left: 200px;
    }

</style>

<legend class="text-center header">Actualizar Producto</legend>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="actions/actualizar_Producto_Accion.php" method="post" enctype="multipart/form-data">
                    <fieldset>


                        <div class="form-group">
                            <label for="id" class="col-md-1 col-md-offset-2 text-center">id</label>
                            <div class="col-md-8">
                                <input class="form-control" id="id" name="id"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre" class="col-md-1 col-md-offset-2 text-center">nombre</label>
                            <div class="col-md-8">
                                <input class="form-control" id="nombre" name="nombre"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-md-1 col-md-offset-2 text-center">descripcion</label>
                            <div class="col-md-8">
                                <input class="form-control" id="descripcion" name="descripcion"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="precio" class="col-md-1 col-md-offset-2 text-center">precio</label>
                            <div class="col-md-8">
                                <input class="form-control" id="precio" name="precio"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="col-md-1 col-md-offset-2 text-center">imagen</label>
                            <div class="col-md-8">
                                <input class="form-control" id="imagen" name="imagen" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoria" class="col-md-1 col-md-offset-2 text-center">categoria</label>
                            <div class="col-md-8">
                                <input class="form-control" id="categoria" name="categoria"  type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="garantia" class="col-md-1 col-md-offset-2 text-center">garantia</label>
                            <div class="col-md-8">
                                <input class="form-control" id="garantia" name="garantia"  type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color" class="col-md-1 col-md-offset-2 text-center">color</label>
                            <div class="col-md-8">
                                <input class="form-control" id="color" name="color"  type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center mt-4 mb-4">
                                <button type="submit" class="btn btn-success btn-lg ">actualizar Producto</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


