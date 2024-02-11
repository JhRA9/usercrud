<?php

    $nombre = $_POST['nombre'];
    $id = $_POST['id'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    echo "La informacion ha sido registrada"."<br/>";
    echo "Bienvenido usuario ". $nombre .", su ID es ". $id. ", tiene una edad de ". $edad. " y su email es ". $email;    

?>