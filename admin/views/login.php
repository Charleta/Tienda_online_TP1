

<style>
    .div-general{
        height: calc(100vh - 5rem);
        align-items: center;

    }
    .card{
        border-radius: 20px;
        box-shadow: rgba(148, 181, 234, 0.56) 0px 22px 50px 4px;
    }

    .card-body{
        color: #08192b;
        font-weight: bold;
        font-size: 18px;

    }
    .cont-button{
        margin-top: 2%px;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    button {
        background-color: #08192b!important;
        color: #fff!important;
        width: 100px !important;
    }
</style>





<div class="row justify-content-center div-general" >
    <div class="col col-md-4 ">
        <div class="card">
            <div class="card-header">
                Iniciar sesión
            </div>
            <div class="cont-form">
                <div class="card-body">

                    <form action="actions/auto_logeo.php" method="POST" class="row">
                        <div class="mb-3 col-12">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="username" class="form-control" id="username" name="username" placeholder="" required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="password" class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>

                        <div class="mb-3 col-12 d-grid cont-button">
                            <button class="btn" type="submit">Iniciar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>