<?php

if (!empty($_POST["registrar"])) {
    if (empty($_POST["nombre"]) or empty($_POST["edad"]) or empty($_POST["email"])) {
        echo "Alguno de los campos esta vacio, porfavor rellenelos todos";
    } else {

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $conexion = $newconexion->query("insert into usuarios_registrados(nombre_usuario, edad_usuario, email)values('$nombre','$edad','$email')");
        if ($conexion == 1) {
            echo "Se ha registrado el usuario correctamente";
        } else {
            echo "No se ha registrado el usuario correctamente";
        }
    }
}
