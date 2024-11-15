<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $rol = $_POST["rol"];

    $query = "INSERT INTO usuario (nombreUsuario, usuario, clave, idRol) VALUES ('$nombre', '$usuario', '$clave', '$rol')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../interfaces/in_usuarios.php");
        exit();
    } else {
        echo "Error al crear el usuario: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>