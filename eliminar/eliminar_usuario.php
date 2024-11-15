<?php
include '../conexion/conexion.php';

if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    $query = "DELETE FROM usuario WHERE idUsuario='$idUsuario'";

    if (mysqli_query($conexion, $query)) {

        header('Location:  ../interfaces/in_usuario.php');
    }


mysqli_close($conexion);
}
?>

