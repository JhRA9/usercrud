<?php
$newconexion = new mysqli("localhost", "root", "", "datos_usuarios", "3306");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>

<body>
    <br>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">id_usuario</th>
                <th scope="col">nombre_usuario</th>
                <th scope="col">edad_usuario</th>
                <th scope="col">email</th>
            </tr>

        </thead>

        <?php
        $selecciondatos = "select *from usuarios_registrados";
        $ejecucion = mysqli_query($newconexion, $selecciondatos);
        while ($mostrar = mysqli_fetch_array($ejecucion)) {
        ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $mostrar['id_usuario'] ?></th>
                    <td><?php echo $mostrar['nombre_usuario'] ?></td>
                    <td><?php echo $mostrar['edad_usuario'] ?></td>
                    <td><?php echo $mostrar['email'] ?></td>
                </tr>
            <?php
        }
            ?>
    </table>
    <a class="btn btn-info" href="/">Volver al inio</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>