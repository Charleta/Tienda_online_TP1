<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tienda online</title>

</head>
<body>

<nav class="navbar navbar-expand-lg  miNav  barraMenu" >
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?seccion=home">Admin Tienda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['username']))  {?>
                <li class="nav-item">
                    <a class="nav-link active lt" href="index.php?seccion=agregar">Agregar Artista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?seccion=actualizar">| Actualizar Artista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?seccion=baja">| Eliminar Artista</a>
                </li>
                <?php } else { ?>
                    <li  class="nav-item"><a href="../index.php?seccion=home">Regresar al incio</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>





