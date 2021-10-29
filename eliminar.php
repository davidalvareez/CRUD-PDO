<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';
$email = $_GET["email"];
$stmt = $pdo->prepare("DELETE FROM tbl_alumnos WHERE email=?");

try {
    $stmt->bindParam(1, $email);
    $stmt->execute();
    header('location: vista.php');
} catch (\Throwable $th) {
    echo "nononono";
}