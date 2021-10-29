<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$sentencia=$pdo->prepare("SELECT * FROM tbl_alumnos");
$sentencia->execute();
$listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

