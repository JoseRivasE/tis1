<?php
include("../paginas/conexion.php");

$nombre_recibido = $_POST["nombre"];
$logo_recibido = $_POST["logo"];
$origen_recibido = $_POST["origen"];

echo $nombre_recibido;

$insert = "INSERT INTO marcas (nombre,logo,origen) VALUES ('".$nombre_recibido."','".$logo_recibido."','".$origen_recibido."')";

$resultado = mysqli_query($conexion,$insert);

header("Location: index.php");
?>