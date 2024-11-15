<?php
include '../conexion/conexion.php';

if (isset($_GET['id'])) {
    $idEstudiante = $_GET['id'];

    $query = "DELETE FROM estudiante WHERE idEstudiante='$idEstudiante'";

    if (mysqli_query($conexion, $query)) {
      

        header('Location: ../interfaces/in_estudiante.php');
    }

mysqli_close($conexion);
}
?>
