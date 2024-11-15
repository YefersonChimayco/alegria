<?php
include '../conexion/conexion.php';

if (isset($_GET['id'])) {
    $idCurso = $_GET['id'];

    $query = "DELETE FROM curso WHERE idCurso='$idCurso'";

    if (mysqli_query($conexion, $query)) {
        
        header('Location: ../interfaces/in_curso.php');
    }

mysqli_close($conexion);
}
?>
