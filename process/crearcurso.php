<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $estado = $_POST["estado"];

    $query = "INSERT INTO curso (NombreCurso, EstadoCurso) VALUES ('$nombre', '$estado')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../interfaces/in_curso.php");
        exit();
    } else {
        echo "Error al crear el curso: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>