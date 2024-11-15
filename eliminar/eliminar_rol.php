<?php
include '../conexion/conexion.php';

if (isset($_GET['id'])) {
    $idRol = $_GET['id'];

    $query = "DELETE FROM rol WHERE idRol='$idRol'";

    if (mysqli_query($conexion, $query)) {
      

        header('Location:  ../interfaces/in_rol.php');
    }

mysqli_close($conexion);
}
?>
