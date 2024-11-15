<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valornota = $_POST["valornota"];
    $idCurso = $_POST["idCurso"];
    $idEstudiante = $_POST["idEstudiante"];
    $idDocente = $_POST["idDocente"];

    $query = "INSERT INTO nota (ValorNota, idCurso, idEstudiante, idDocente) 
              VALUES ('$valornota', '$idCurso', '$idEstudiante', '$idDocente')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../interfaces/in_calificaciones.php");
        exit();
    } else {
        echo "Error al crear la nota: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>