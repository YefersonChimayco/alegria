<?php
$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$bd = 'calificaciones';

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
} 
?>