<?php
include '../conexion/conexion.php';

if (isset($_GET['id'])) {
    $idNota = $_GET['id'];

    $query = "DELETE FROM nota WHERE idNota='$idNota'";

    if (mysqli_query($conexion, $query)) {
     
        header('Location:  ../interfaces/in_calificaciones.php');
    }

mysqli_close($conexion);
}
?>
