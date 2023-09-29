<?php
include("conexion.php");

$nombre_recibido = $_POST["nombre"];

echo $nombre_recibido;

$insert = "INSERT INTO marcas (nombre) VALUES ('$nombre_recibido')";
$resultado = mysqli_connect($conexion,$insert);

header("location: index.php");
?>