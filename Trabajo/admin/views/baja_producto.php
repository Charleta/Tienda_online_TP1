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

<legend class="text-center header">Sacar producto</legend>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="actions/agregar_Producto_accion.php" method="post" enctype="multipart/form-data">
                    <fieldset>


                        <div class="form-group">
                            <label for="id" class="col-md-1 col-md-offset-2 text-center">id producto</label>
                            <div class="col-md-8">
                                <input class="form-control" id="id" name="id"  type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center mt-4 mb-4">
                                <button type="submit" class="btn btn-success btn-lg ">Sacar Producto</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>





