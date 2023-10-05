<?php
include("conexion.php");

$id_recibido = $_GET["id_enviado"];

echo $nombre_recibido;

$delete = "DELETE FROM marcas WHERE id=".$id_recibido.";";
$resultado = mysqli_query($conexion, $delete);

header("Location: index.php");

?>