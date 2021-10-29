<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';
include 'crear.php';
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
$email=$_POST["email"];
$persona=new Persona($email,$nombre,$apellido,$edad);
$stmt = $pdo->prepare("INSERT INTO tbl_alumnos (email, nombre, apellido, edad) VALUES (:email,:nombre, :apellido, :edad)" );
try{
    if($stmt->execute((array) $persona)){
        echo 'bien';
        header("location:vista.php");
    }else{ echo 'mal';}
}catch(PDOException $e){
    echo 'mal';
   echo  $e->getMessage();
}