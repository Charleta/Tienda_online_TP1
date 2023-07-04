<div class="row justify-content-center" style="height: calc(100vh - 5rem); align-items: center; background: #ff00000f;">
    <div class="col col-md-6">
        <div class="card">
                <div class="card-header">
                    Iniciar sesión
                </div>
                <div class="card-body">

                        <form action="actions/auto_logeo.php" method="POST" class="row">
                                <div class="mb-3 col-12">
                                        <label for="username" class="form-label">Usuario</label>
                                        <input type="username" class="form-control" id="username" name="username" placeholder="usuario" required>
                                </div>
                                <div class="mb-3 col-12">
                                        <label for="password" class="col-sm-12 col-form-label">Password</label>
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                </div>

                                <div class="mb-3 col-12 d-grid">
                                    <button class="btn btn-success" type="submit">Iniciar</button>
                                </div>
                        </form>
                </div>
        </div>
    </div>
</div>