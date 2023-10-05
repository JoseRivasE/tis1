<?php
include("conexion.php");

$nombre_recibido = $_POST["nombre"];
$logo_recibido = $_POST["logo"];

echo $nombre_recibido;

$insert = "INSERT INTO marcas (nombre,logo) VALUES ('".$nombre_recibido."')";

$resultado = mysqli_query($conexion,$insert);

header("Location: index.php");
?>