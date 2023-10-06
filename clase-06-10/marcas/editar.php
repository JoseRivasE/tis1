<?php
    include("../paginas/conexion.php");
    $id_recibido = $_GET["id_enviado"];
    $consulta = "SELECT * FROM marcas WHERE id=".$id_recibido."";
    $resultado = mysqli_query($conexion,$consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 php</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
            <form action="guardar.php">
                <div class="input-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" class="nombre" id="nombre">
                </div>
                <div class="input-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Logo</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Origen</option>
                    <option value="japon">Japón</option>
                    <option value="china">China</option>
                    <option value="eeuu">EEUU</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>