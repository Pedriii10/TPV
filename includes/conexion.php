<?php
    $servername = "127.0.0.1:3307";
    $database = "tpv";
    $username = "Pedro";
    $password = "Pedro10055";

    $conectar = mysqli_connect($servername, $username, $password, $database);

    if (!$conectar) {
        die("No se ha podido conectar" . mysqli_connect_error());
    } 
?>
