<?php 
include_once 'cabecera.html';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <center><h1>Crear persona</h1></center>
    <br>
    <div class="form-group align-items-center">
    <form action="./insertar.php" method="post">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido">
        <label for="edad">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad">
        <br>
        <input type="submit" class="btn btn-success" value="Crear">
    </form>
    </div>
</body>
</html>