<?php
$host = "localhost";
$usuario = "a25alenieelb_videojuego";
$contrasenia = "alejandro.nieto.21A";
$base_de_datos = "a25alenieelb_videojuego";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
