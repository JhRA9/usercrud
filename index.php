<?php
$newconexion = new mysqli("localhost", "root", "", "datos_usuarios", "3306");
include("envio_bases_datos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <!-- FORMULARIO -->
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                    <div class="form-text">Digite su nombre de usuario</div>
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" name="edad">
                    <div class="form-text">Digite su edad</div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                    <div class="form-text">Digite su email</div>
                </div>

                

                <input class="btn btn-success" type="submit" value="Registrar" name="registrar">

                <a class="btn btn-info " href="/mostrar_usuarios_sql/mostrar_usuarios.php">Mostrar usuarios de mi base de datos</a>
            </form>

            <p></p>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>