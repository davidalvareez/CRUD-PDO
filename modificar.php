<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
include 'actualizar.php';

$stmt = $pdo->prepare("UPDATE tbl_alumnos SET nombre=?, apellido=?, edad=? WHERE email=?");


$nombre = $_POST['nombre'];
echo $nombre;
echo "<br>";
$apellido = $_POST['apellido'];
echo $apellido;
echo "<br>";
$edad = $_POST['edad'];
echo $edad;
echo "<br>";
$email = $_POST['email'];
echo $email;

echo "<br>";
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $apellido);
$stmt->bindParam(3, $edad);
$stmt->bindParam(4, $email);
$stmt->execute();
$persona=new Persona($email,$nombre,$apellido,$edad);
$stmt = $pdo->prepare("UPDATE tbl_alumnos SET nombre=:$nombre, apellido=:$apellido, edad=:$edad WHERE email=:$email" );
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}
