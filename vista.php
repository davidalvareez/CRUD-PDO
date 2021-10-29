<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar personas</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<br>";
echo "<br>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>email</th>";
echo "<th>nombre</th>";
echo "<th>apellido</th>";
echo "<th>edad</th>";
echo "<th>Actualizar</th>";
echo "<th>Borrar</th>";
echo "</tr>";
foreach ($listaPersonas as $persona) {

    echo "<tr>";
    echo "<td>{$persona['email']}</td>";
    echo "<td>{$persona['nombre']}</td>";
    echo "<td>{$persona['apellido']}</td>";
    echo "<td>{$persona['edad']}</td>";
    

    echo "<td><a type='button' class='btn btn-primary' href='actualizar.php?email={$persona['email']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";

    echo "<td><a type='button' class='btn btn-danger' href='eliminar.php?email={$persona['email']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">Borrar</a></td>";
    echo '</tr>';
}

echo "</table>";
echo "</html>";
